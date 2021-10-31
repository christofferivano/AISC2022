<?php

namespace App\Http\Controllers\Competition\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Voucher;

class CompetitionDataController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //Institution CRUD
    public function index_institution(){
        $institution = Institution::all();
        return view('admin-institution', ['institution' => $institution]);
    }

    public function index_institution_add(){
        return view('institution_add');
    }

    public function index_institution_add_add(Request $request){
        $this->validate(
            $request,
            [
                'institution' => 'required|unique:institution,nama_institusi'
            ]
        );
        Institution::create([
            'nama_institusi' => $request->institution
        ]);
        return redirect()->route('institution');
    }

    public function institution_delete($institute){
        $ins = Institution::find($institute);
        $ins->delete();
        $institution = Institution::all();
        return redirect()->route('institution');
    }

    public function institution_edit($id){
        $institution = Institution::find($id);
        return view('institution_edit', ['institution' => $institution]);
    }

    public function institution_update($id, Request $request){
        $this->validate(
            $request,
            [
                'institution' => 'required|unique:institution,nama_institusi'
            ]
        );
        $institution = Institution::find($id);
        $institution->nama_institusi = $request->institution;
        $institution->save();
        return redirect()->route('institution');
    }

    //Voucher CRUD
    public function index_voucher(){
        $vouchers = Voucher::all();
        return view('admin-voucher', ['vouchers' => $vouchers]);
    }

    public function voucher_add(){
        $institution = Institution::all();
        return view('voucher_add', ['institution' => $institution]);
    }

    public function post_voucher_add(Request $request){
        $this->validate(
            $request,
            [
                'kode_voucher' => 'required',
                'besar_potongan' => 'required',
                'jenis_voucher' => 'required'
            ]
        );
        if(!strcmp($request->jenis_voucher, "Roadshow")){
            $this->validate($request,
            [
                'expired_date' => 'required',
            ]);
        }

        if(!strcmp($request->jenis_voucher, "Organisasi")){
            $this->validate($request,
            [
                'institution' => 'required',
            ]);
        }

        if (Institution::where('nama_institusi', '=', $request->institution)->exists()) {
            $institution_id = Institution::whereNama_institusi($request->institution)->first()->id;
        }
        else{
            $institution_id = NULL;
        }

        Voucher::create([
            'kode_voucher' => $request->kode_voucher,
            'besar_potongan' => $request->besar_potongan,
            'jenis_voucher' => $request->jenis_voucher,
            'expired_date' => $request->expired_date,
            'institution_id' => $institution_id
        ]);
        return redirect()->route('voucher');
    }

    public function voucher_delete($voucher){
        $vou = Voucher::find($voucher);
        $vou->delete();
        return redirect()->route('voucher');
    }

    public function voucher_edit($id){
        $voucher = Voucher::find($id);
        $institution = Institution::all();
        return view('voucher-edit', ['voucher' => $voucher, 'institution' => $institution]);
    }

    public function voucher_update($id, Request $request){
        $this->validate(
            $request,
            [
                'kode_voucher' => 'required',
                'besar_potongan' => 'required',
                'jenis_voucher' => 'required'
            ]
        );
        if(!strcmp($request->jenis_voucher, "Roadshow")){
            $this->validate($request,
            [
                'expired_date' => 'required',
            ]);
        }

        if(!strcmp($request->jenis_voucher, "Organisasi")){
            $this->validate($request,
            [
                'institution' => 'required'
            ]);
        }

        $voucher = Voucher::find($id);
        
        if (Institution::where('nama_institusi', '=', $request->institution)->exists()) {
            $institution_id = Institution::whereNama_institusi($request->institution)->first()->id;
        }
        else{
            $institution_id = NULL;
        }

        $voucher->kode_voucher = $request->kode_voucher;
        $voucher->jenis_voucher = $request->jenis_voucher;
        $voucher->expired_date = $request->expired_date;
        $voucher->besar_potongan = $request->besar_potongan;
        $voucher->institution_id = $institution_id;

        $voucher->save();
        return redirect()->route('voucher');
    }
}
