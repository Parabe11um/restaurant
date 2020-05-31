@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="Header">
                        <div class="container">
                            <div class="menu-block">
                                <nav class="Menu">
                                    <a aria-current="page" class="menu-links selected" href="/">Главная</a>
{{--                                    <a class="menu-links" href="/about">О нас</a>--}}
{{--                                    <a class="menu-links" href="/restaurants">Рестораны</a>--}}
{{--                                    <a class="menu-links" href="/contacts">Контакты</a>--}}
                                    <a href="/login" class="button-link">Войти как владелец</a>
                                    @if (Auth::user()->hasRole('author'))
                                        <!-- при создании пользевателя поминять значения author на editor-->
                                    @endif

                                    @if(Auth::user()->name)
                                        <a class="button-link" href="{{route('admin.post')}}">Редактировать профиль</a>
                                        <a href="#" class="button-link">{{ Auth::user()->name }}</a>
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
                            Вы авторизовались, как {{ Auth::user()->name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('content')
    <div id="root"></div>
@endsection
