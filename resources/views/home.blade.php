@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="Header">
                    <div class="container">
                        <div class="menu-block">
                            <nav class="Menu">
                                <a aria-current="page" class="menu-links selected" href="/">На главную</a>
                            @if (Auth::user()->hasRole('author'))
                                <!-- при создании пользевателя поминять значения author на editor-->
                                @endif
                                @if(Auth::user()->name)
                                    <a class="button-link" href="{{route('UseRofil.create')}}">Редактировать профиль</a>
                                    <span class="user-name">{{ Auth::user()->name }}</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">                     @csrf                 </form>
                                    <a class="button-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();   document.getElementById('logout-form').submit();"> {{ __('Выйти') }} </a>
                                @endif
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <dvi class="alert alert=success">
                        {{session('status')}}
                </div>
                @endif
                <div class="container">
                    <div class="welcome">
                        <div class="welcome-text">Вы авторизовались, как {{ Auth::user()->name }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div id="root"></div>
@endsection
