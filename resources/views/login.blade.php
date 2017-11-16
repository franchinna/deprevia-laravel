@extends('layouts.headerfooter')



@section('contenido')

    <header>
        <title>Inicio de Sesion - dePrevia</title>
    </header>



    <div class="container">
        <div class="section"></div>
        <main class="center-align">

            <div class="section"></div>

            <h5 class="indigo-text">Inicia sesión con tu correo</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="post">


                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' value=""/>
                                <label for='email'>Ingresa tu Email</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Ingresa tu Password</label>
                            </div>

                            <div class="row">
                                <label style='float: center;'>
                                    Recordar
                                </label>
                                <!-- Switch -->
                                <div class="switch">
                                    <label>
                                        Off
                                        <input type="checkbox" name="recordame" value="1">
                                        <span class="lever"></span>
                                        On
                                    </label>
                                </div>
                                <label style='float: center;'>
                                    <br>
                                    <a class='pink-text' href='#!'><b>Perdí mi clave</b></a>
                                </label>
                            </div>

                        </div>


                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                        </div>

                    </form>
                </div>
            </div>
            <a href="register">Crear cuenta</a>

            <div class="section"></div>
            <div class="section"></div>
        </main>
    </div>
    </body>
@endsection('contenido')