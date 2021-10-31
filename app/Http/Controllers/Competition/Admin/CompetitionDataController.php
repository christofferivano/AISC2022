<?php

namespace App\Http\Controllers\Competition\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution;

class CompetitionDataController extends Controller
{

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
}
