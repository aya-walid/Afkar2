@extends('layouts.app')

@section('content')
 <style>
  body{
   background: #f2f7f8;
  }
 </style>
 <div class="row">
  <!-- column -->
  <div class="col-sm-12">
   <div class="card">
    <div class="card-body">
     <h4 class="card-title">All Users</h4>

     <div class="table-responsive">
      <table class="table user-table no-wrap">
       <thead>
       <tr>
        <th class="border-top-0">#</th>
        <th class="border-top-0">Name</th>
        <th class="border-top-0">Email</th>
        <th class="border-top-0">Phone No</th>
        <th class="border-top-0">Address</th>
        <th class="border-top-0">delete</th>
       </tr>
       </thead>
       <tbody>
         @foreach($users as $user)
          <tr>
           <td>
            {{$user->id}}
           </td>
           <td>
            {{$user->name}}
           </td>
           <td>
            {{$user->email}}
           </td>

           <td>
            {{$user->mobile}}
           </td>
           <td>
            {{$user->address}}
           </td>
           <td>
            <a href="{{route('user.destroy',$user->id)}}"><i class="fas fa-trash-alt"></i></a>
           </td>
          </tr>
         @endforeach
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
@endsection
