@extends('layouts.headerfooter')

@section('contenido')
    <header>
        <title>Registro de usuario - dePrevia</title>
    </header>


    <div class="container">
        <div class="section"></div>
        <main class="center-align">

            <div class="section"></div>

            <h5 class="indigo-text">Registro</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" role="form" action="{{ route('register') }}" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="row data-error">
                        @if ($errors->has('first_name'))
                            <span class="data-error">
                                <strong>{{ $errors->first('first_name') }}<br></strong>
                            </span>
                        @endif
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}<br></strong>
                                    </span>
                            @endif

                            @if ($errors->has('birth'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('birth') }}<br></strong>
                                    </span>
                            @endif

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}<br></strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row">
                                <div class="input-field col s6">
                                        <label for="first_name" data-error="wrong">Nombre</label>
                                        <input id="first_name" type="text" class="validate" name="first_name" value="{{ old('first_name') }}">
                                </div>

                            <div class="input-field col s6">
                                <label for="last_name">Apellido</label>
                                <input id="last_name" type="text" class="validate" name="last_name" value="{{ old('last_name') }}">
                            </div>

                            <div class="input-field col s6">
                                <label for="username">Nombre de usuario</label>
                                <input id="username" type="text" class="validate" name="username" value="{{ old('username') }}">
                            </div>
                            <div class="input-field col s6">
                                <label for="edad">Cual es tu edad?</label>
                                <input id="edad" type="text" class="validate" name="edad" value="{{ old('edad') }}">
                            </div>

                            <div class="input-field col s6">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="validate" name="password">
                            </div>
                            <div class="input-field col s6">
                                <label for="password_confirmation">Confirmar Contraseña</label>
                                <input id="password_confirmation" type="password" class="validate" name="password_confirmation">
                            </div>

                            <div class="input-field col s12">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="validate" name="email" value="{{ old('first_name') }}">
                            </div>
                            <div class="file-field input-field col s12">
                                <div class="btn-large waves-effect indigo">
                                    <span>IMG</span>
                                    <input type="file" name="avatar" class="" >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <p  class="col s12" style="color: #9e9e9e"> Cual es tu sexo? </p>
                            <div class="row">
                                <div action="col s3">

                                    <input name="genero" type="radio" id="genero_masculino" value="0" class="with-gap">
                                    <label for="genero_masculino">Hombre</label>


                                    <input name="genero" type="radio" id="genero_femenino" value="1" class="with-gap">
                                    <label for="genero_femenino">Mujer</label>


                                    <input name="genero" type="radio" id="genero_otros" value="2" class="with-gap">
                                    <label for="genero_otros">Otro</label>

                                </div>

                            </div>

                            <div class="row col s12">
                                <input type="checkbox" id="chk-terminos" name="terminos" class="with-gap">
                                <label for="chk-terminos">Acepto los términos y condiciones</label>
                            </div>

                            <div class="row col s6">

                                <input type="submit" name="btn_submit" class="col s12 btn btn-large waves-effect indigo" value="Registrarme">
                            </div>
                            <div class="row col s6">
                                <a href="/" id="download-button" class="col s12 btn btn-large waves-effect indigo">Volver</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="section"></div>
            <div class="section"></div>
        </main>
    </div>


@endsection
{{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}