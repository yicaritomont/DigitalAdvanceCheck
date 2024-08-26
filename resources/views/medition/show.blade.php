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
                Resultados
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                @foreach($result as $key => $attemp)
                <div class="col-sm border p-3">
                    <div class="jumbotron">
                    <h1 class="display-4"><b>Resultados Intento #{{$key}}</b></h1>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$attemp['TotalScore']}}%;" aria-valuenow="{{$attemp['TotalScore']}}" aria-valuemin="0" aria-valuemax="100">{{$attemp['TotalScore']}}% Madurez Digital</div>
                    </div>
                    <p class="lead"></p>
                    <hr class="my-4">
                    <p><b>¿Qué significa este porcentaje?</b></p>
                    <p> El {{$attemp['TotalScore']}}%, indica que las respuestas dadas en este intento, me muestran que estoy en el nivel de madurez: <b><h3>{{$attemp['Level']->visible_name}}</h3></b></p>
                    <p class="lead">
                        <button type="button" class="btn btn-dark btn-rounded btn-fw btn-index btn-lg" data-bs-toggle="modal" data-bs-target="#ModalAttemp{{$key}}">
                            Ver más
                        </button>
                    </p>
                    </div>
                </div>
                <div class="modal fade" id="ModalAttemp{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 50% !important;" >
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="jumbotron">
                                <h1 class="display-4"><b>Resultados Intento #{{$key}} : {{$attemp['Level']->visible_name}}</b></h1>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$attemp['TotalScore']}}%;" aria-valuenow="{{$attemp['TotalScore']}}" aria-valuemin="0" aria-valuemax="100">{{$attemp['TotalScore']}}%</div>
                                </div>
                                <p class="lead"></p>
                                <hr class="my-4">
                                <p><b>¿Qué significa {{$attemp['Level']->visible_name}} ?</b></p>
                                <p>{{$attemp['Level']->description}}</p>
                                <p> Este resultado se obtuvo de la sumatoria por cada dimensión, a continuación conoceras tus resultados individales : </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Dimensión</th>
                                                <th>Puntaje Obtenido</th>
                                                <th>Puntaje Esperado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($attemp['DimensionScore'] as $key => $byDimension)
                                            @php
                                                $percentage = ($byDimension->total_points / $byDimension->max_range) * 100;

                                                if ($percentage >= 50) {
                                                    $colorClass = 'text-success'; // Verde
                                                } elseif ($percentage >= 30) {
                                                    $colorClass = 'text-warning'; // Amarillo
                                                } else {
                                                    $colorClass = 'text-danger'; // Rojo
                                                }
                                            @endphp
                                                <tr>
                                                    <td>{{$byDimension->name}}</td>
                                                    <td class="{{ $colorClass }}"><b>{{$byDimension->total_points}}</b></td>
                                                    <td class="text-success"><b>{{$byDimension->max_range}}<b></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
            </div>
        </div>
    </div>
</div>
<!--end::Card-->


@endsection