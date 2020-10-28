@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-sm-12" >
        <div class="card">

            <div class="card-body" style="width: 50%">
                <p style="margin-bottom: 25px;font-weight: 500;font-size: 18px">Add User form</p>
                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{route('user.store')}}" method="post">
                    @csrf
                    @isset($success)
                        <button class="btn btn-success mx-auto mx-md-0 text-white" style="margin-bottom: 20px">
                            {{$success}}
                        </button>
                    @endisset
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Full Name</label>
                        <div class="col-md-12">
                            <input type="text"  name="name"
                                   class="form-control pl-0 form-control-line @error('name') is-invalid @enderror">
                            @error('name')
                            <span style="color: red; font-size: 16px;">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email"
                                   class="form-control pl-0 form-control-line @error('email') is-invalid @enderror" name="email"
                                   id="example-email">
                            @error('email')
                            <span style="color: red; font-size: 16px;">{{ $message }}</span>
                            @enderror
                        </div>



                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Password</label>
                        <div class="col-md-12">
                            <input type="password" name="password"
                                   class="form-control pl-0 form-control-line">
                            @error('password')
                            <span style="color: red; font-size: 16px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Phone No</label>
                        <div class="col-md-12">
                            <input type="text" name="mobile"
                                   class="form-control pl-0 form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Address</label>
                        <div class="col-md-12">
                            <input type="text" name="address"
                                   class="form-control pl-0 form-control-line">
                            @error('address')
                            <span style="color: red; font-size: 16px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Image</label>
                        <div class="col-md-12">
                            <input type="file" name="image"
                                   class="form-control pl-0 form-control-line">
                            @error('image')
                            <span style="color: red; font-size: 16px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 d-flex">
                            <button class="btn btn-success mx-auto mx-md-0 text-white" type="submit">Add User</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        </div>
    </div>
@endsection