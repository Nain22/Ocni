@extends('layouts.app')
@section('jumbotron')
    @include('partials.jumbotron' , ['title' => 'Configurar Idiomas' , 'icon' => 'globe'])
@endsection
@push('styles')
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush

@section('content')
<div class="pl-3 pr-3">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header" style="font-size: 20px">
                        {{ __("Administrar Idiomas") }}
                    </div>
                    <div style="padding: 10px ; text-align: right" >
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Insertar Idioma
                        </button>
                    </div>
                    <div class="card-body">
                        <Idiomas />

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src = "https://code.jquery.com/jquery-3.3.1.js" defer ></script>
    <script src = "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer ></script>
    <script src = "https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer ></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                lengthMenu: [5 , 10 , 25 , 50 , 75 , 100],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
            });
        } );

    </script>
@endpush

