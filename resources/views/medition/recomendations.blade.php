@extends('layouts.master')
@section('content')
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<!--begin::Card-->
<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">
                Recomendaciones
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> # Intento</th> 
                                <th> Nivel</th> 
                                <th> Detalles </th> 
                                <th> Opciones </th> 
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($result as $key => $attemp)
                            <tr>
                                <td> {{$attemp['attemp']}}</td> 
                                <td> <p><b><h5>{{$attemp['Level']->visible_name}}</h5></b></p></td> 
                                <td> <p class="wrap"> {!! $attemp['Recomendations']->congrats!!}</p> </td> 
                                <td>  
                                    <p class="lead">
                                        <button type="button" class="btn btn-dark btn-rounded btn-fw btn-index btn-lg" data-bs-toggle="modal" data-bs-target="#ModalAttemp{{$key}}">
                                            Ver más
                                        </button>
                                        <a href="{{route('showResume', $key)}}" target="_blank" class="btn btn-dark btn-rounded btn-fw btn-index btn-lg">Imprimir</a>
                                    </p>
                                </td> 
                            </tr>
                            <div class="modal fade" id="ModalAttemp{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" style="max-width: 70% !important;" >
                                    <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="jumbotron letter_jumbotrom">
                                            <h2 class="display-4"><b>Recomendaciones para la medición #{{$attemp['attemp']}}</b></h2>
                                            <hr class="my-4">
                                            <div class="col-md-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h2><b>¡Felicitaciones!</b></h2>
                                                        <div class="media">
                                                            <i class="mdi mdi-white-balance-sunny icon-md text-info d-flex align-self-start mr-3"></i> 
                                                            <div class="media-body">
                                                                <p class="card-text">{!!$attemp['Recomendations']->congrats !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-description"> {!!$attemp['Recomendations']->remark !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h1><b>¿Qué te recomendamos?</b></h1> 
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <p class="card-text">{!!$attemp['Recomendations']->recomendations !!}</p>
                                                            </div>
                                                            <i class="mdi mdi-human-greeting icon-md text-info d-flex align-self-start mr-3"></i> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h1><b>¡No te detengas!</b></h1>
                                                        <p class="card-description">{!!$attemp['Recomendations']->best_practices !!}</p>
                                                        <p class="card-description">{!!$attemp['Recomendations']->conclusions !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Card-->


@endsection