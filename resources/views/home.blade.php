@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cv Chubut</div>

                <div class="panel-body">
                    Bienvenido !
                </div>
            </div>
        </div>
    </div>
    <div class="links">
        <a href="{{ url('/usuarios') }}">Usuarios</a>
        <a href="{{ url('/actividades') }}">Actividades</a>

    </div>
</div>
@endsection
