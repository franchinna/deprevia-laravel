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

                    <form class="col s12" role="form" action="register" method="post" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="first_name">Nombre</label>
                                <input id="first_name" type="text" class="validate" name="first_name" value="">
                            </div>
                            <div class="input-field col s6">
                                <label for="last_name">Apellido</label>
                                <input id="last_name" type="text" class="validate" name="last_name" value="">
                            </div>

                            <div class="input-field col s6">
                                <label for="username">Nombre de usuario</label>
                                <input id="username" type="text" class="validate" name="username" value="">
                            </div>
                            <div class="input-field col s6">
                                <label for="edad">Cual es tu edad?</label>
                                <input id="edad" type="text" class="validate" name="edad" value="">
                            </div>

                            <div class="input-field col s6">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="validate" name="password">
                            </div>
                            <div class="input-field col s6">
                                <label for="password">Confirmar Contraseña</label>
                                <input id="passwordConfirm" type="password" class="validate" name="passwordConfirm">
                            </div>

                            <div class="input-field col s12">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="validate" name="email" value="">
                            </div>
                            <div class="input-field col s12">
                                <label for="email">Confirmar Email</label>
                                <input id="emailConfirm" type="email" class="validate" name="emailConfirm" value="">
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


@endsection('contenido')