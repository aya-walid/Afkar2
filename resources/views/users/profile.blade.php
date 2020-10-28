@extends('layouts.app')

@section('content')
    <style>
        body{
            background: #f2f7f8;
        }
    </style>
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body profile-card">
                    <center class="m-t-30">
                        @if(Auth::user()->image == null)
                            <img src="{{asset('images/userImages/user-default.jpg')}}" class="rounded-circle" width="150">
                        @else
                            <img src="{{asset('images/userImages/'.Auth::user()->image)}}" class="rounded-circle" width="150">
                        @endif
                        <h4 class="card-title m-t-10">{{Auth::user()->name}}</h4>
                        <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <a href="javascript:void(0)" class="link">
                                    <i class="icon-people" aria-hidden="true"></i>
                                    <span class="font-normal">254</span>
                                </a></div>
                            <div class="col-4">
                                <a href="javascript:void(0)" class="link">
                                    <i class="icon-picture" aria-hidden="true"></i>
                                    <span class="font-normal">54</span>
                                </a></div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{route('user.update' , Auth::user()->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Full Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Name" value="{{Auth::user()->name}}" name="name"
                                       class="form-control pl-0 form-control-line">

                            @error('name')
                            <span style="color: red; font-size: 12px;">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="email" value="{{Auth::user()->email}}"
                                       class="form-control pl-0 form-control-line" name="email"
                                       id="example-email">
                                @error('email')
                                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 mb-0">Phone No</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Phone No" name="mobile"
                                       class="form-control pl-0 form-control-line" value="{{Auth::user()->mobile}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Address</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Address" name="address"
                                       class="form-control pl-0 form-control-line" value="{{Auth::user()->address}}">
                                @error('address')
                                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Image</label>
                            <div class="col-md-12">
                                <input type="file" name="image"
                                       class="form-control pl-0 form-control-line">
                                @error('image')
                                <span style="color: red; font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-12 d-flex">
                                <button class="btn btn-success mx-auto mx-md-0 text-white" type="submit">Update
                                    Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
