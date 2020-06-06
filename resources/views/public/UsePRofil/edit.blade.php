@extends('layouts.app')
@section('content')

    <div class="Header">
        <div class="container">
            <div class="menu-block">
                <nav class="Menu">
                    <a aria-current="page" class="menu-links selected" href="/">На главную</a>
                @if (Auth::user()->hasRole('author'))
                    <!-- при создании пользевателя поминять значения author на editor-->
                    @endif
                    <a class="button-link" href="{{route('UsePRofil.edit',[Auth::user()->id])}}">Редактировать
                        профиль</a>
                    @if(Auth::user()->name)

                        <span class="user-name">{{ Auth::user()->name }}</span>
                        <a class="button-link" href="{{ url('/logout') }}"> Выйти </a>
                    @endif
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form-block">
            <form method="POST" action="{{route('UsePRofil.update',[Auth::user()->id])}}">

            {{csrf_field()}}
            {{method_field('put')}}

            <!-- <div class="from-group">
                <label for="email">Adminemail</label>
                <input type="text" class="from-control" id="email" name="email" >
              </div>-->

                <input type="text" class="admin-inputs" id="name" name="name" value="{{$users->name}}">
                <input type="text" class="admin-inputs" id="family" name="family" value="{{$users->family}}">
                <input type="text" class="admin-inputs" id="email" name="admin_email" value="{{$users->email}}">
                <input type="text" class="admin-inputs" id="phone" name="phone" value="{{$users->phone}}">
                <input class="auth-button" type="submit" value="Редактировать">
            </form>
        </div>
    </div>
    </div>
@endsection
