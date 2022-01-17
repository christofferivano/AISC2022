<?php

namespace App\Http\Controllers\Competition\Paper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comperegis;
use Illuminate\Support\Facades\Storage;
use App\Models\Payment;
use App\Models\Member;
use App\Models\Voucher;
use App\Models\Institution;
use Carbon\Carbon;
use App\Models\Document;

class PaperCompetitionController extends Controller
{
    
    public function index()
    {
        return view('competition-paper');
    }

    public function register(){
        $institution = Institution::all();
        return view('papercompe-regis')->with(compact('institution', $institution));
    }

    public function createStep1(Request $request){
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');
        $member3 = $request->session()->get('member3');
        $institution = Institution::all();
        return view('papercompe-regis')
        ->with(compact('papercompe', $papercompe))
        ->with(compact('team_leader', $team_leader))
        ->with(compact('member1', $member1))
        ->with(compact('member2', $member2))
        ->with(compact('member3', $member3))
        ->with(compact('institution', $institution));
    }

    public function createStep2(Request $request){
        return view('payment-method');
    }

    public function createStep3(Request $request, $count){
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');
        $member3 = $request->session()->get('member3');
        return view('couponpaper', ['count', $count])
        ->with(compact('papercompe', $papercompe))
        ->with(compact('team_leader', $team_leader))
        ->with(compact('member1', $member1))
        ->with(compact('member2', $member2))
        ->with(compact('member3', $member3))
        ->with('count', $count);
    }

    public function createStep4(Request $request, $count){
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');
        $member3 = $request->session()->get('member3');
        return view('competitionregis-2', ['count', $count])
        ->with(compact('papercompe', $papercompe))
        ->with(compact('team_leader', $team_leader))
        ->with(compact('member1', $member1))
        ->with(compact('member2', $member2))
        ->with(compact('member3', $member3))
        ->with('count', $count);
    }

    public function createStep5(){
        return view('comperegisdone');
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

        $biaya;
        if (!$request->origin){
            $biaya = 60000;
        }
        else $biaya = 6;

        if(!strcmp($request->place, "Other")){
            $this->validate($request, [
                'other_place' => 'required'
            ]);
            $validatedData['place'] = $request->other_place;
        }

        if(!strcmp($request->place1, "Other")){
            $this->validate($request, [
                'other_place1' => 'required'
            ]);
            $validatedData['place1'] = $request->other_place1;
        }

        if(!strcmp($request->place2, "Other")){
            $this->validate($request, [
                'other_place2' => 'required'
            ]);
            $validatedData['place2'] = $request->other_place2;
        }

        $biaya_leader = 0;
        $biaya_member1 = 0;
        $biaya_member2 = 0;
        $count = 0;

        if (empty($request->session()->get('team_leader'))){
            $team_leader = new Member();
            $team_leader->fill([
                'nama' => $validatedData['tl'],
                'email' => $validatedData['email'],
                'institution' => $validatedData['place'],
                'phone_number' => $validatedData['telp'],
                'jenis_member' => "Ketua",
                'biaya_pendaftaran' => $biaya,
            ]);

            $request->session()->put('team_leader', $team_leader);

            $biaya_leader = $biaya;
        }
        else {
            $team_leader = $request->session()->get('team_leader');
            $team_leader->fill([
                'nama' => $validatedData['tl'],
                'email' => $validatedData['email'],
                'institution' => $validatedData['place'],
                'phone_number' => $validatedData['telp'],
                'jenis_member' => "Ketua",
                'biaya_pendaftaran' => $biaya,
            ]);

            $request->session()->put('team_leader', $team_leader);

            $biaya_leader = $biaya;
        }

        if (empty($request->session()->get('member1'))){
            if ($request->member1 && $request->place1){
                $member1 = new Member();
                $member1->fill([
                    'nama' => $validatedData['member1'],
                    'institution' => $validatedData['place1'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => $biaya
                ]);

                $request->session()->put('member1', $member1);

                $biaya_member1 = $biaya;

                $count++;
            }
        }
        else {
            if ($request->member1 && $request->place1){
                $member1 = $request->session()->get('member1');
                $member1->fill([
                    'nama' => $validatedData['member1'],
                    'institution' => $validatedData['place1'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => $biaya
                ]);

                $request->session()->put('member1', $member1);

                $biaya_member1 = $biaya;

                $count++;
            }
        }

        if (empty($request->session()->get('member2'))){
            if ($request->member2 && $request->place2){
                $member2 = new Member();
                $member2->fill([
                    'nama' => $validatedData['member2'],
                    'institution' => $validatedData['place2'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => $biaya
                ]);

                $request->session()->put('member2', $member2);
            
                $biaya_member2 = $biaya;

                $count++;
            }
        }
        else {
            if ($request->member2 && $request->place2){
                $member2 = $request->session()->get('member2');
                $member2->fill([
                    'nama' => $validatedData['member2'],
                    'institution' => $validatedData['place2'],
                    'jenis_member' => "Member",
                    'biaya_pendaftaran' => $biaya
                ]);

                $request->session()->put('member2', $member2);
            
                $biaya_member2 = $biaya;

                $count++;
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
        // dd($team_leader->nama, $team_leader->institution, $team_leader->biaya_pendaftaran);
        // dd($papercompe->nama_tim, $papercompe->jenis, $papercompe->total_pembayaran, $papercompe->validation, $papercompe->origin);
        return redirect()->route('paper-competition-regis-voucher-get', ['count'=>$count]);
    }

    public function postCreateStep2(Request $request){
        // dd($request->hasFile('document_requirement'));
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');

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
            //dd($path);
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
            // dd($path);
        }


        $format = date('Y-m-d', strtotime($date));
        $papercompe->save();

        $payment = new Payment();
        $payment->fill([
            'name_card' => $name_card,
            'payment_date' => $format,
            'filename' => $filenameSimpan,
            'filepath' => $path,
            'comperegis_id' => $papercompe->id,
            'method' => $request->radio
        ]);

        $payment->save();

        $team_leader->fill([
            'comperegis_id' => $papercompe->id
        ]);
        $team_leader->save();

        if($member1){
            $member1->fill([
                'comperegis_id' => $papercompe->id
            ]);
            $member1->save();
        }

        if($member2){
            $member2->fill([
                'comperegis_id' => $papercompe->id
            ]);
            $member2->save();
        }

        $filenameWithExt = $request->file('document_requirement')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('document_requirement')->getClientOriginalExtension();
        $filenameSimpan = $filename.'_'.time().'.'.$extension;
        $path = $request->file('document_requirement')->storeAs('public/comperegis/document', $filenameSimpan);
    
        $document = new Document();
        $document->fill([
            'filename' => $filenameSimpan,
            'filepath' => $path,
            'comperegis_id' => $papercompe->id
        ]);
        $document->save();
        // dd($payment, $team_leader, $member1, $member2);
        $request->session()->forget('papercompe');
        $request->session()->forget('payment');
        $request->session()->forget('document');
        $request->session()->forget('team_leader');
        $request->session()->forget('member1');
        $request->session()->forget('member2');
        return redirect()->route('paper-competition-regis-complete');
    }

    public function postCreateStep3(Request $request){
        
        $papercompe = $request->session()->get('papercompe');
        $team_leader = $request->session()->get('team_leader');
        $member1 = $request->session()->get('member1');
        $member2 = $request->session()->get('member2');

        $count=0;

        $this->validate($request, [
            'team_leader' => 'nullable|exists:App\Models\Voucher,kode_voucher',
            'member1' => 'nullable|exists:App\Models\Voucher,kode_voucher',
            'member2' => 'nullable|exists:App\Models\Voucher,kode_voucher'
        ],
        [
            'team_leader.exists' => 'The voucher code for team leader is invalid',
            'member1.exists' => 'The voucher code for frist member is invalid',
            'member2.exists' => 'The voucher code for second member is invalid'
        ]
        );

        $voucher_leader = NULL;
        $voucher_member1 = NULL;
        $voucher_member2 = NULL;

        if(!$papercompe->origin) $biaya = 60000;
        else $biaya = 6;

        $team_leader->biaya_pendaftaran=$biaya;
        $biaya_leader = $team_leader->biaya_pendaftaran;
        if($member1) {
            $member1->biaya_pendaftaran=$biaya;
            $biaya_member1 = $member1->biaya_pendaftaran;
            $count++;
        }
        else $biaya_member1 = 0;
        if($member2) {
            $member2->biaya_pendaftaran=$biaya;
            $biaya_member2 = $member2->biaya_pendaftaran;
            $count++;
        }
        else $biaya_member2 = 0;

        if ($request->team_leader){
            $voucher = Voucher::whereKode_voucher($request->team_leader)->first();
            if (!strcmp($voucher->jenis_voucher, "Organisasi")){
                if (strcmp($voucher->institution->nama_institusi, $team_leader->institution)){
                    return redirect()->back()->withErrors(['leader_roadshow' => 'This voucher is not eligible for the team leader.']);
                }
            }
            if(!strcmp($voucher->jenis_voucher, "Roadshow")){
                if(Carbon::now()->toDateString()>$voucher->expired_date){
                    return redirect()->back()->withErrors(['leader_roadshow' => 'This voucher is already expired.']);
                }
            }
            $voucher_leader = $voucher->id;
            if($papercompe->origin) $voucher->besar_potongan = $voucher->besar_potongan/10000;
            $team_leader->biaya_pendaftaran = $team_leader->biaya_pendaftaran-$voucher->besar_potongan;
            $biaya_leader = $team_leader->biaya_pendaftaran;
        }

        if ($request->member1){
            $voucher = Voucher::whereKode_voucher($request->member1)->first();
            if (!strcmp($voucher->jenis_voucher, "Organisasi")){
                if (strcmp($voucher->institution->nama_institusi, $member1->institution)){
                    return redirect()->back()->withErrors(['member1_roadshow' => 'This voucher is not eligible for first member.']);
                }
            }
            if(!strcmp($voucher->jenis_voucher, "Roadshow")){
                if(Carbon::now()->toDateString()>$voucher->expired_date){
                    return redirect()->back()->withErrors(['member1_roadshow' => 'This voucher is already expired.']);
                }
            }
            $voucher_member1 = $voucher->id;
            if($papercompe->origin) $voucher->besar_potongan = $voucher->besar_potongan/10000;
            $member1->biaya_pendaftaran = $member1->biaya_pendaftaran-$voucher->besar_potongan;
            $biaya_member1 = $member1->biaya_pendaftaran;
        }

        if ($request->member2){
            $voucher = Voucher::whereKode_voucher($request->member2)->first();
            if (!strcmp($voucher->jenis_voucher, "Organisasi")){
                if (strcmp($voucher->institution->nama_institusi, $member2->institution)){
                    return redirect()->back()->withErrors(['member2_roadshow' => 'This voucher is not eligible for second member.']);
                }
            }
            if (!strcmp($voucher->jenis_voucher, "Roadshow")){
                if (Carbon::now()->toDateString()>$voucher->expired_date){
                    return redirect()->back()->withErrors(['member2_roadshow' => 'This voucher is already expired.']);
                }
            }
            $voucher_member2 = $voucher->id;
            if($papercompe->origin) $voucher->besar_potongan = $voucher->besar_potongan/10000;
            $member2->biaya_pendaftaran = $member2->biaya_pendaftaran-$voucher->besar_potongan;
            $biaya_member2 = $member2->biaya_pendaftaran;
        }
        

        $papercompe->total_pembayaran = $biaya_leader + $biaya_member1 + $biaya_member2;

        $team_leader->fill([
            'voucher_id' => $voucher_leader
        ]);

        

        if($member1){
            $member1->fill([
                'voucher_id' => $voucher_member1
            ]);
        }

        if($member2){
            $member2->fill([
                'voucher_id' => $voucher_member2
            ]);
        }

        // dd($team_leader, $member1, $member2, $papercompe);
        return redirect()->route('paper-competition-total', ['count' =>$count]);
    }
}
