<?php

namespace App\Http\Controllers\Volunteer\Registration;

use App\Http\Controllers\Controller;
use App\Models\volregis;
use Illuminate\Http\Request;
use App\Models\File;

class VolunteerRegistrationPage3 extends Controller
{
    public function index(String $name, String $radio, String $major, String $batch,
        String $domicile, String $email, String $wa, String $line, String $position1, String $position2){
            return view('volunteer-regis-3', [
                'name' => $name,
                'radio' => $radio,
                'major' => $major,
                'batch' => $batch,
                'domicile' => $domicile,
                'email' => $email,
                'wa' => $wa,
                'line' => $line,
                'position1' => $position1,
                'position2' => $position2,
            ]);
    }

    public function store(Request $request, String $name, String $radio, String $major, String $batch,
        String $domicile, String $email, String $wa, String $line, String $position1, String $position2){

            if ($position1 == "Media Production" || $position2 == "Media Production"){
                $this->validate($request, [
                    'cv' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'portofolio' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'twibbon' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'ig_sharing' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'ig_follow' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                ]);
            }
            
            else{
                $this->validate($request, [
                    'cv' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'portofolio' => 'mimes:pdf,jpeg,jpg,png|max:2048',
                    'twibbon' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'ig_sharing' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                    'ig_follow' => 'required|mimes:pdf,jpeg,jpg,png|max:2048',
                ]);
            }

            $cv_model = new File;
            $portofolio_model = new File;
            $twibbon_model = new File;
            $ig_sharing_model = new File;
            $ig_follow_model = new File;

            if($request->file()){
                $cv_filename = $request->file('cv')->getClientOriginalName();
                $twibbon_filename = $request->file('twibbon')->getClientOriginalName();
                $ig_sharing_filename = $request->file('ig_sharing')->getClientOriginalName();
                $ig_follow_filename = $request->file('ig_follow')->getClientOriginalName();

                $cv_filepath = $request->file('cv')->storeAs('volunteer_registration/cv', $cv_filename, 'public');
                $twibbon_filepath = $request->file('twibbon')->storeAs('volunteer_registration/twibbon', $twibbon_filename, 'public');
                $ig_sharing_filepath = $request->file('ig_sharing')->storeAs('volunteer_registration/ig_sharing', $ig_sharing_filename, 'public');
                $ig_follow_filepath = $request->file('ig_follow')->storeAs('volunteer_registration/ig_follow', $ig_follow_filename, 'public');

                $cv_model->name = $cv_filename;
                $cv_model->file_path = '/storage/'.$cv_filepath;
                $twibbon_model->name = $twibbon_filename;
                $twibbon_model->file_path = '/storage/'.$twibbon_filepath;
                $ig_sharing_model->name = $ig_sharing_filename;
                $ig_sharing_model->file_path = '/storage/'.$ig_sharing_filepath;
                $ig_follow_model->name = $ig_follow_filename;
                $ig_follow_model->file_path = '/storage/'.$ig_follow_filepath;

                // $cv_model->save();
                // $twibbon_model->save();
                // $ig_sharing_model->save();
                // $ig_follow_model->save();
            }
            
            if($request->file('portofolio')){
                $portofolio_filename = $request->file('portofolio')->getClientOriginalName();

                $portofolio_filepath = $request->file('cv')->storeAs('volunteer_registration/portofolio', $portofolio_filename, 'public');

                $portofolio_model->name = $portofolio_filename;
                $portofolio_model->file_path = '/storage/'.$portofolio_filepath;
            }
    }
}
