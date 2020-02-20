@extends('adminlte::page')

@section('title', 'FarolCRED')

@section('content_header')
    <h1 class="m-0 text-dark">Conciliação</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Conciliação Ok!</p>
                    <form action="uploadxml" method="post" enctype="multipart/form-data">
                    <input type="file" name="image">  ...
                    <input type="button" name="Enviar">fdlgkdlgks </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
