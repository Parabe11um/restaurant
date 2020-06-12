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
                                      <a class="button-link" href="{{route('UsePRofil.edit',[Auth::user()->id])}}">Редактировать профиль</a>
                                      <form method="POST" action="{{route('UsePRofil.destroy',[Auth::user()->id])}}">
                                      {{csrf_field()}}
                                      {{method_field('delete')}}
                                      <input type="submit" value="Delete" class="btn btn-danger">
                                      </form>
                                    @if(Auth::user()->name)

                                        <span class="user-name">{{ Auth::user()->name }}</span>
                                        <a class="button-link" href="{{ url('/logout') }}"> Выйти </a>
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
