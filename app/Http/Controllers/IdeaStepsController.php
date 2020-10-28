<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Idea;
use PulkitJalan\GeoIP\GeoIP;

class IdeaStepsController extends Controller
{
    public function firstStep(Request $request){
        $geoip = new GeoIP();
        // $geoip->setIp('5.1.41.0	');
        $lat = $geoip->getLatitude(); // 51.5141
        $lon = $geoip->getLongitude(); // -3.1969
        $country = $geoip->getCountry();
        $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $language = $languages[0];
         Session::put('country_name', $country);
        if ($language == 'ar'){
            Session::put('locale', 'ar');
            return view('ideas_ar.step1');
        } 
         Session::put('locale', 'en');
        return view('ideas.step1');
    }
    public function secondStep(Request $request){
    
         Session::put('first_name', $request->first_name);
        Session::put('last_name', $request->last_name);
        Session::put('email', $request->email);
        Session::put('address', $request->address);
        Session::put('phone', $request->phone);
        Session::put('city', $request->city);
        Session::put('country_id', $request->country);
        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address'=>['required','string'],
            'phone'=>['required'],
            'city'=>['required', 'string'],
            'country'=>['required'],

        ]);
        if(Session::get('country_name') == 'Palestine' or Session::get('country_name') == 'Saudi Arabia'){
            $request->validate([
                 'phone'=> ['required','regex:/(05)[0-9]/','digits:10']

            ]);
        }elseif(Session::get('country_name') == 'Hashemite Kingdom of Jordan'){
             $request->validate([
                 'phone'=> ['required','regex:/(07)[0-9]/','digits:10']

            ]);
        }
       
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step2');
        }
        return view('ideas.step2');
    }
    public function thirdStep(Request $request){
        $request->validate([
            'idea_name'=>['required', 'string'],
            'idea_description'=>['required', 'string'],
            'ack_eighteen'=>['required'],
            // 'initial'=>['required'],
        ]);
        Session::put('idea_name', $request->idea_name);
        Session::put('idea_description', $request->idea_description);
        // Session::put('initial_fees', $request->initial);
        Session::put('age', 'confirmed');
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step3');
        }
        return view('ideas.step3');
    }
    public function forthStep(Request $request){
        $request->validate([
            'agreement_aff'=>['required'],
        ]);
        Session::put('agreement1_confirmed', 'confirmed');
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step4');
        }
        return view('ideas.step4');
    }
    public function fifthStep(Request $request){
        $request->validate([
            'agreement_disc'=>['required'],
        ]);
        Session::put('agreement2_confirmed', 'confirmed');

        //get country id

        //store Idea into database
        $idea = new Idea();
        $idea->first_name = Session::get('first_name');
        $idea->last_name = Session::get('last_name');
        $idea->email = Session::get('email');
        $idea->address = Session::get('address');
        $idea->phone = Session::get('phone');
        $idea->idea_name = Session::get('idea_name');
        $idea->idea_description = Session::get('idea_description');
        // $idea->initial_fees = Session::get('initial_fees');
        $idea->initial_fees = 0;
        $idea->city = Session::get('city');
        $idea->country_id = Session::get('country_id');
        $idea->save();
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step5');
        }
        return view('ideas.step5');
    }

    public function back($pageNumber){
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step'.$pageNumber);
        }
        return view('ideas.step'.$pageNumber);

    }


}
