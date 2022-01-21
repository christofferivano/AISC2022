<?php

namespace App\Http\Controllers\Conference;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Conf;
use App\Models\Conf_file;

class ConferencePage extends Controller
{
    public function index(){
        return view ('conf-landing');
    }

    public function end_register(){
        return view ('conferencedone');
    }

    public function index_exhibition(){
        return view ('exhibition');
    }

    public function get_register(Request $request){
        $conference = $request->session()->get('conference');
        if(empty($request->session()->get('other'))) $request->session()->put('other', 0);
        $other = $request->session()->get('other');
        $institution = Institution::select('nama_institusi')->get();
        return view ('conferenceregis')
        ->with(compact('institution', $institution))
        ->with(compact('conference', $conference))
        ->with('other', $other);
    }

    public function post_register(Request $request){
        $conference;
        if(empty($request->session()->get('conference'))) $conference = new Conf();   
        else $conference = $request->session()->get('conference');
        
        $conference->fill([
            'name' => $request->name,
            'institution' => $request->place,
            'major' => $request->major,
            'email' => $request->email,
            'position' => $request->position,
            'document_link' => $request->file
        ]);

        if($request->place == 'Other') {
            $conference->institution = $request->other_place;
            $request->session()->put('other', 1);
        }
        
        $request->session()->put('conference', $conference);
        
        if($request->institution == 'Other'){
            $request->validate([
                'name' => 'required',
                'other_place' => 'required',
                'major' => 'required',
                'email' => 'required|email',
                'position' => 'required',
                'file' => 'required'
            ]);
        }
        else{
            $request->validate([
                'name' => 'required',
                'place' => 'required',
                'major' => 'required',
                'email' => 'required|email',
                'position' => 'required',
                'file' => 'required'
            ]);
        }
        
        $conference->save();

        $request->session()->forget('conference');
        $request->session()->forget('other');

        return redirect()->route('conference-registration-end');
    }
}
