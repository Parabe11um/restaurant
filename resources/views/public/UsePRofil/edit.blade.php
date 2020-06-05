@extends('layouts.app')
@section('content')
        <div class="container">
           <div class="row">
           <div class="col-md-offset-4 col-md-4">
             <form method="POST" action="{{route('UsePRofil.update',[Auth::user()->id])}}">
             {{csrf_field()}}
             {{method_field('put')}}

              <!-- <div class="from-group">
                <label for="email">Adminemail</label>
                <input type="text" class="from-control" id="email" name="email" >
              </div>-->
             <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="from-control" id="name" name="name" value="{{$users->name}}" >
              </div>

               <div class="form-group">
                <label for="family">family</label>
                <input type="text" class="from-control" id="family" name="family" value="{{$users->family}}" >
              </div>
               <div class="form-group">
                <label for="admin_email">email</label>
                <input type="text" class="from-control" id="email" name="admin_email"  value="{{$users->email}}" >
              </div>

               <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="from-control" id="phone" name="phone" value="{{$users->phone}}" >
              </div>

                <input type="submit" value="Submit" class="btn btn-success">
                </form>
                </div>
                </div>
                </div>

             @endsection

