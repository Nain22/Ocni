@extends('layouts.app')
@section('jumbotron')
    @include('partials.jumbotron' , ['title' => 'Configurar tu perfil' , 'icon' => 'user-circle'])
@endsection

@section('content')
    <div class="pl-3 pr-3">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="font-size: 20px">
                        {{ __("Actualiza tus datos") }}
                    </div>
                    <div class="card-body">
                        <Profile />
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
