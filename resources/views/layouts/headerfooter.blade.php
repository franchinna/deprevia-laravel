<!doctype html>
<html lang="{{ app()->getLocale() }}">


<header>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles & Fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>


    <div class="navbar-fixed">
        <nav class="red accent-4" role="navigation">
            <div class="nav-wrapper container">
                <img src="images/logo.png" alt="" style="width: 200px; margin: 10px;">
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="/faqs">FAQs</a></li>
                    <li><a href="/register">Registro</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a class="waves-effect waves-red" href="/">Home</a></li>
                    <li><a class="waves-effect waves-red" href="/faqs">FAQs</a></li>
                    <li><a class="waves-effect waves-red" href="/register">Registro</a></li>
                    <li><a class="waves-effect waves-red" href="/login">Login</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

</header>

@yield('contenido')

<footer class="page-footer red accent-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Lorem ipsum</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla nisi, maximus non libero varius, bibendum placerat magna. Morbi suscipit efficitur urna sagittis luctus. Cras consectetur sit amet ipsum ac dapibus. Nunc bibendum justo non hendrerit varius. Etiam fringilla vel felis non iaculis. In sit amet ornare magna. Nullam vitae ipsum fermentum, semper leo non, posuere quam. Morbi quis gravida leo. Sed bibendum, lectus volutpat tincidunt malesuada, erat massa finibus nisl, quis faucibus justo ex in nisl.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                    <li><a class="white-text" href="#!">Lorem ipsum</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Hecho por <a class="orange-text text-lighten-3" href="#">Los del fondo DH</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>

</footer>
</html>