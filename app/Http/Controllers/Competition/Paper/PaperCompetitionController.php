<?php

namespace App\Http\Controllers\Competition\Paper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comperegis;
use Illuminate\Support\Facades\Storage;
use App\Models\Payment;
use App\Models\Member;

class PaperCompetitionController extends Controller
{
    public function index()
    {
        return view('competition-paper');
    }

    public function register(){
        return view('papercompe-regis');
    }

    public function createStep1(Request $request){
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');
        return view('papercompe-regis')
        ->with(compact('papercompe', $papercompe))
        ->with(compact('team_leader', $team_leader))
        ->with(compact('member1', $member1))
        ->with(compact('member2', $member2));
    }

    public function createStep2(Request $request){
        return view('payment-method');
    }

    public function createStep3(Request $request){
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');
        return view('couponpaper')
        ->with(compact('papercompe', $papercompe))
        ->with(compact('team_leader', $team_leader))
        ->with(compact('member1', $member1))
        ->with(compact('member2', $member2));
    }

    public function postCreateStep1(Request $request){
        $validatedData = $request->validate([
            'teamname' => 'required',
            'tl' => 'required',
            'place' => 'required',
            'telp' => 'required',
            'origin' => 'required',
            'email' => 'required|email',
            'member1' => 'nullable',
            'place1' => 'nullable',
            'member2' => 'nullable',
            'place2' => 'nullable',
            'member3' => 'nullable',
            'place3' => 'nullable',
            'jenis' => 'required'
        ]);

        $biaya_leader = 0;
        $biaya_member1 = 0;
        $biaya_member2 = 0;

        if (empty($request->session()->get('team_leader'))){
            $team_leader = new Member();
            $team_leader->fill([
                'nama' => $validatedData['tl'],
                'email' => $validatedData['email'],
                'institution' => $validatedData['place'],
                'phone_number' => $validatedData['telp'],
                'jenis_member' => "Ketua",
                'biaya_pendaftaran' => 60000,
            ]);

            $request->session()->put('team_leader', $team_leader);

            $biaya_leader = 60000;
        }
        else {
            $team_leader = $request->session()->get('team_leader');
            $team_leader->fill([
                'nama' => $validatedData['tl'],
                'email' => $validatedData['email'],
                'institution' => $validatedData['place'],
                'phone_number' => $validatedData['telp'],
                'jenis_member' => "Ketua",
                'biaya_pendaftaran' => 60000,
            ]);

            $request->session()->put('team_leader', $team_leader);

            $biaya_leader = 60000;
        }

        if (empty($request->session()->get('member1'))){
            if ($validatedData['member1'] && $validatedData['place1']){
                $member1 = new Member();
                $member1->fill([
                    'nama' => $validatedData['member1'],
                    'institution' => $validatedData['place1'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => 60000
                ]);

                $request->session()->put('member1', $member1);

                $biaya_member1 = 60000;
            }
        }
        else {
            if ($validatedData['member1'] && $validatedData['place1']){
                $member1 = $request->session()->get('member1');
                $member1->fill([
                    'nama' => $validatedData['member1'],
                    'institution' => $validatedData['place1'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => 60000
                ]);

                $request->session()->put('member1', $member1);

                $biaya_member1 = 60000;
            }
        }

        if (empty($request->session()->get('member2'))){
            if ($validatedData['member2'] && $validatedData['place2']){
                $member2 = new Member();
                $member2->fill([
                    'nama' => $validatedData['member2'],
                    'institution' => $validatedData['place2'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => 60000
                ]);

                $request->session()->put('member2', $member2);
            
                $biaya_member2 = 60000;
            }
        }
        else {
            if ($validatedData['member2'] && $validatedData['place2']){
                $member2 = $request->session()->get('member2');
                $member2->fill([
                    'nama' => $validatedData['member2'],
                    'institution' => $validatedData['place2'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => 60000
                ]);

                $request->session()->put('member2', $member2);
            
                $biaya_member2 = 60000;
            }
        }

        $total_biaya = $biaya_leader + $biaya_member1 + $biaya_member2;

        if (empty($request->session()->get('papercompe'))){
            $papercompe = new Comperegis();
            $papercompe->fill([
                'jenis' => $validatedData['jenis'],
                'nama_tim' => $validatedData['teamname'],
                'total_pembayaran' => $total_biaya,
                'validation' => 0,
                'origin' => $validatedData['origin'],
            ]);

            $request->session()->put('papercompe', $papercompe);
        }
        else{
            $papercompe = $request->session()->get('papercompe');
            $papercompe->fill([
                'jenis' => $validatedData['jenis'],
                'nama_tim' => $validatedData['teamname'],
                'total_pembayaran' => $total_biaya,
                'validation' => 0,
                'origin' => $validatedData['origin'],
            ]);
            $request->session()->put('papercompe', $papercompe);
        }
        
        return redirect()->route('paper-competition-regis-voucher');
    }

    public function postCreateStep2(Request $request){
        // dd($request->hasFile('document_requirement'));
        $papercompe = $request->session()->get('papercompe');

        $this->validate($request,
            [
                'radio' => 'required',
                'document_requirement' => 'required|mimes:pdf|max:2048'
            ],
            [
                'document_requirement.required' => 'Document requirement must be uploaded!',
                'document_requirement.mimes' => 'File must be in pdf format!',
                'document_requirement.max' => 'File size must not exceed 2 MB'
            ]
        );

        $name_card;
        $date;
        $path;
        $filenameSimpan;

        if (!strcmp($request->radio, 'BCA')){
            $this->validate($request, [
                    'name_bca' => 'required',
                    'date_bca' => 'required',
                    'tf_receipt_bca' => 'required|mimes:jpeg,png,jpg|max:1024',
                ],
                [
                    'tf_receipt_bca.required' => 'BCA Payment Receipt must be uploaded',
                    'tf_receipt_bca.mimes' => 'File must be in jpg or png format!',
                    'tf_receipt_bca.max' => 'File size must not exceed 1 MB'
                ]    
            );

            $name_card = $request->name_bca;
            $date = $request->date_bca;

            $filenameWithExt = $request->file('tf_receipt_bca')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('tf_receipt_bca')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('tf_receipt_bca')->storeAs('public/comperegis/payment', $filenameSimpan);
            dd($path);
        }
        else {
            $this->validate($request, [
                    'name_paypal' => 'required',
                    'date_paypal' => 'required',
                    'tf_receipt_paypal' => 'required|mimes:jpeg,png,jpg|max:1024',
                ],
                [
                    'tf_receipt_paypal.required' => 'Paypal Payment Receipt must be uploaded',
                    'tf_receipt_paypal.mimes' => 'File must be in jpg or png format!',
                    'tf_receipt_paypal.max' => 'File size must not exceed 1 MB'
                ]    
            );

            $name_card = $request->name_paypal;
            $date = $request->date_paypal;

            $filenameWithExt = $request->file('tf_receipt_paypal')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('tf_receipt_paypal')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('tf_receipt_paypal')->storeAs('public/comperegis/payment', $filenameSimpan);
            dd($path);
        }

        $payment = new Payment();
        $payment->fill([
            'name_card' => $name_card,
            'payment_date' => $date,
            'filename' => $filenameSimpan,
            'filepath' => $path,
            'comperegis_id' => $papercompe->id,
        ]);
    }
}
