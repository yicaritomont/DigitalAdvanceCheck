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
                @foreach($result as $key => $attemp)
                <div class="col-sm border p-3">
                    <div class="jumbotron">
                    <h1 class="display-4"><b>Recomendación Int.#{{$key}} <small>(Nivel : {{$attemp['Level']->visible_name}} )</small></b></h1>
                    {!! $attemp['Recomendations']->remark!!}
                    <p> El {{$attemp['TotalScore']}}%, indica que en este intento estás en el nivel de madurez <b><h3>{{$attemp['Level']->visible_name}}</h3></b></p>
                    <p class="lead">
                        <button type="button" class="btn btn-dark btn-rounded btn-fw btn-index btn-lg" data-bs-toggle="modal" data-bs-target="#ModalAttemp{{$key}}">
                            Ver más
                        </button>
                        <a href="{{route('showResume', $key)}}" target="_blank" class="btn btn-dark btn-rounded btn-fw btn-index btn-lg">Imprimir</a>
                    </p>
                    </div>
                </div>
                <div class="modal fade" id="ModalAttemp{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 50% !important;" >
                        <div class="modal-content">
                        <div class="modal-body">
                            <div class="jumbotron">
                                <h1 class="display-4"><b>Recomendaciones #{{$key}}</b></h1>
                               
                                <p class="lead"></p>
                                <hr class="my-4">
                                {!!$attemp['Recomendations']->congrats !!}
                                {!!$attemp['Recomendations']->remark !!}
                                {!!$attemp['Recomendations']->recomendations !!}
                                {!!$attemp['Recomendations']->best_practices !!}
                                {!!$attemp['Recomendations']->conclusions !!}
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