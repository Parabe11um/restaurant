@extends('layouts.app')
@section('content')
        <div class="container">
           <div class="row">
           <div class="col-md-offset-4 col-md-4">
             <form method="post" action="{{route('UsePRofil.update',['id'=>$users->id])}}">
             {{csrf_field()}}
             {{method_field('put')}}
             
              <!-- <div class="from-group">
                <label for="email">Adminemail</label>
                <input type="text" class="from-control" id="email" name="email" >
              </div>-->
             <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="from-control" id="name" name="name" value="{{$useadmin->admin_name}}" >
              </div>
             
               <div class="form-group">
                <label for="family">family</label>
                <input type="text" class="from-control" id="family" name="family" value="{{$useadmin->family}}" >
              </div>
               <div class="form-group">
                <label for="admin_email">email</label>
                <input type="text" class="from-control" id="admin_email" name="admin_email"  value="{{$useadmin->admin_email}}" >
              </div>
             
               <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="from-control" id="phone" name="phone" value="{{$useadmin->phone}}" >
              </div>
            
                <input type="submit" value="Submit" class="btn btn-success">
                </form>
                </div>
                </div>
                </div>
             @endsection