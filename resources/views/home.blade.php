@extends('layouts.headerfooter')

@section('contenido')
    <header>
        <title>Perfil - dePrevia</title>
    </header>

    <div class="row" style="text-align: center">
        <h5>Bienvenido {{auth()->user()->username}} </h5>
        <p><img src='' style=""></p>
    </div>
@endsection
