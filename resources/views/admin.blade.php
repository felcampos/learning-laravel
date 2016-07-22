@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="bg-success">@if(session()->has('status'))
                   <h1> {{session('status')}}</h1>
                @endif</div>

                <div class="panel panel-default">
                    <div class="panel-heading">Administrador</div>

                    <div class="panel-body">
                        Bem vindo à pagina de administração
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
