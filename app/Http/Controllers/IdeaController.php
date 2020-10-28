<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;
use PulkitJalan\GeoIP\GeoIP;


class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('users.addIdea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $geoip = new GeoIP();
//
//        $lat = $geoip->getLatitude(); // 51.5141
//        $lon = $geoip->getLongitude(); // -3.1969
//        dd($geoip::getCountry());


        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:ideas'],
            'address'=>['required','string'],
            'phone'=>['required'],
            'idea_name'=>['required', 'string'],
            'idea_description'=>['required', 'string'],
            'city'=>['required', 'string'],
            'country'=>['required'],

        ]);
        $idea = new Idea();
        $idea->first_name = $request->first_name;
        $idea->last_name = $request->last_name;
        $idea->email = $request->email;
        $idea->address = $request->address;
        $idea->phone = $request->phone;
        $idea->idea_name = $request->idea_name;
        $idea->idea_description = $request->idea_description;
        $idea->city = $request->city;
        $idea->country_id = $request->country;
        $idea->save();
        return view('ideas.addIdea',['success'=>"Idea Added successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
