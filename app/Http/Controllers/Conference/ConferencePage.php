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
        ]);

        if($request->place == 'Other') {
            $conference->instituion = $request->other_place;
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
                'file' => 'required|mimes:pdf|max:2048'
            ],[
                'file.required' => 'Document requirement must be uploaded!',
                'file.mimes' => 'File must be in pdf format!',
                'file.max' => 'File size must not exceed 2 MB'
            ]);
        }
        else{
            $request->validate([
                'name' => 'required',
                'place' => 'required',
                'major' => 'required',
                'email' => 'required|email',
                'position' => 'required',
                'file' => 'required|mimes:pdf|max:2048'
            ],[
                'file.required' => 'Document requirement must be uploaded!',
                'file.mimes' => 'File must be in pdf format!',
                'file.max' => 'File size must not exceed 2 MB'
            ]);
        }

        $conference->save();

        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename.'_'.time().'.'.$extension;
        $path = $request->file('file')->storeAs('public/conference', $filenameSimpan);

        $file = new Conf_file();
        $file->fill([
            'filename' => $filenameSimpan,
            'filepath' => $path,
            'conference_id' => $conference->id,
        ]);
        $file->save();

        $request->session()->forget('conference');
        $request->session()->forget('other');

        return redirect()->route('conference-registration-end');
    }
}
