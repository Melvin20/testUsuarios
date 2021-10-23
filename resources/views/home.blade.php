@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenidos Test Prueba En la pestaña de control d eusuarios encontrarán la información y funciones solicitadas el sedd se encuentra
                     creado con lso datos necesarios ; para generar las tablas solo deben crear una base y especificar el nombre en el .env ejemplo a continuación 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=claro
DB_USERNAME=root
DB_PASSWORD= ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
