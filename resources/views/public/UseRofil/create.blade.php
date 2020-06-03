@extends('layouts.app')
@section('content')
        <div class="container">
           <div class="row">
           <div class="col-md-offset-4 col-md-4">
             <form method="post" action="{{route('UseRofil.store')}}">
             {{csrf_field()}}
             
              <!-- <div class="from-group">
                <label for="email">Adminemail</label>
                <input type="text" class="from-control" id="email" name="email" >
              </div>-->
             <div class="form-group">
                <label for="admin_name">Name</label>
                <input type="text" class="from-control" id="admin_name" name="admin_name" >
              </div>
               <div class="form-group">
                <label for="patronymic">patronymic</label>
                <input type="text" class="from-control" id="patronymic" name="patronymic" >
              </div>
               <div class="form-group">
                <label for="family">family</label>
                <input type="text" class="from-control" id="family" name="family">
              </div>
               <div class="form-group">
                <label for="admin_email">email</label>
                <input type="text" class="from-control" id="admin_email" name="admin_email" >
              </div>
             
               <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="from-control" id="phone" name="phone">
              </div>
               <div class="form-group">
                <label for="Photo file"> Photo file</label>
                <input type="text"  class="from-control" id="Photo file" name="Photo file">
              </div>
               <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="from-control" id="title" name="title" >
              </div>
                 <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="from-control" id="description" name="description">
              </div>
                 <div class="form-group">
                <label for="inn">inn</label>
                <input type="text" class="from-control" id="inn" name="inn" >
              </div>
               <div class="form-group">
                <label for="useRest_phone">useRest_phone</label>
                <input type="text" class="from-control" id="useRest_phone" name="useRest_phone" >
              </div>
                 <div class="form-group">
                <label for="address">address</label>
                <input type="text" class="from-control" id="address" name="address" >
              </div>
               <div class="form-group">
                <label for="site">site</label>
                <input type="text" class="from-control" id="site" name="site">
              </div>
                 <div class="form-group">
                <label for="useRest_email">useRest_email</label>
                <input type="text" class="from-control" id="useRest_email" name="useRest_email" >
              </div>
               <div class="form-group">
                <label for="col_board">col_board</label>
                <input type="text" class="from-control" id="col_board" name="col_board" >
              </div>
                 <div class="form-group">
                <label for="kitchen">kitchen</label>
                <input type="text" class="from-control" id="kitchen" name="kitchen" >
              </div>
                <input type="submit" value="Submit" class="btn btn-success">
                </form>
                </div>
                </div>
                </div>
             @endsection