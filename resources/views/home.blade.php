@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <dvi class="alert alert=success">
                            {{session('status')}}
                    </div>
                    @endif
                    You are logged in!

                    @if (Auth::user()->hasRole('author'))
                    <!-- при создании пользевателя поминять значения author на editor-->

                        <a class="btn btn-default" href="{{route('UseRofil.create')}}">Создать профель</a>
                    @endif
                          <div id="root"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


