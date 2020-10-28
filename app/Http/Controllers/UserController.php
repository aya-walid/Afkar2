<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.users' , ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'address'=>['required','string'],
            'mobile'=>['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        if (isset($data['image'])){
            $imageName = time() . '.'.$request['image']->getClientOriginalExtension();
            $request['image']->move(public_path('images/userImages'), $imageName);

        }else{
            $imageName = null;
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->image =$imageName;
        $user->password = Hash::make($request['password']);
        $user->save();

        return view('users.addUser' , ['success' => 'User added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.profile' , ['user' => User::findOrFail($id)]);
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

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address'=>['required','string'],
            'mobile'=>['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if (isset($request->image)){
            $imageName = time() . '.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/userImages'), $imageName);

        }else{
            $imageName = auth::user()->image;
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->image = $imageName;


        $user->save();

        return view('users.profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id)->delete();
        $users = User::all();
        return view('users.users',['users' => $users]);
    }
}
