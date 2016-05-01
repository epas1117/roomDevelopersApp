@extends('layouts.admin')

@section('content')
@include('alerts.request')
{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}

@include('usuario.forms.user')

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

{!!Form::close()!!}

@stop

        <!--


        <form action="">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Contrasena</label>
                <input type="password" class="form-control">
            </div>
            <button class="btn btn-primary">Registrar</button>
        </form>-->

