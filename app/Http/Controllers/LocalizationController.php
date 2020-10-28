<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
class LocalizationController extends Controller
{
    public function change($lang = 'en')
    {
        $countryName = Session::get('country_name');
        Session::flush();
        Session::put('locale', $lang);
        Session::put('country_name', $countryName);

        if ($lang == 'ar'){
            return view('ideas_ar.step1');
        }elseif ($lang == 'en'){
            return view('ideas.step1');
        }
    }
}
