@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-sm-12" >
            <div class="card">

                <div class="card-body" style="width: 50%">
                    <p style="margin-bottom: 25px;font-weight: 500;font-size: 18px">Add Idea</p>
                    <form class="form-horizontal form-material" action="{{route('idea.store')}}" method="post">
                        @csrf
                        @isset($success)
                            <button class="btn btn-success mx-auto mx-md-0 text-white" style="margin-bottom: 20px">
                                {{$success}}
                            </button>
                        @endisset
                        <div class="form-group">
                            <label class="col-md-12 mb-0">First Name</label>
                            <div class="col-md-12">
                                <input type="text"  name="first_name"
                                       class="form-control pl-0 form-control-line @error('first_name') is-invalid @enderror">
                                @error('first_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Last Name</label>
                            <div class="col-md-12">
                                <input type="text"
                                       class="form-control pl-0 form-control-line @error('last_name') is-invalid @enderror" name="last_name">

                                @error('last_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
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
                            <label class="col-md-12 mb-0">City</label>
                            <div class="col-md-12">
                                <input type="text" name="city"
                                       class="form-control pl-0 form-control-line">
                            </div>
                        </div>
                        @php
                            $countries = \App\Country::all();
                        @endphp
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Country</label>
                            <div class="col-md-12">
                                <select  name="country"class="form-control pl-0 form-control-line">
                                    <option></option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Phone No</label>
                            <div class="col-md-12">
                                <input type="text" name="phone"
                                       class="form-control pl-0 form-control-line">
                                @error('phone')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Email</label>
                            <div class="col-md-12">
                                <input type="email" name="email"
                                       class="form-control pl-0 form-control-line">
                                @error('email')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Idea Name</label>
                            <div class="col-md-12">
                                <input type="text" name="idea_name"
                                       class="form-control pl-0 form-control-line">
                                @error('idea_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Idea Description</label>
                            <div class="col-md-12">
                                <textarea name="idea_description"class="form-control pl-0 form-control-line" style="height: 100px;"> </textarea>

                                @error('idea_description')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12 d-flex">
                                <button class="btn btn-success mx-auto mx-md-0 text-white" type="submit">Add Idea</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection