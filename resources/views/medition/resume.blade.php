@extends('layouts.paint')
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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><a href="http://localhost/DigitalAdvanceCheck/public" style=" width: 53% !important;
  height: 100% !important;
  border-radius: 0 !important;
}" class="navbar-brand brand-logo"><img src="http://localhost/DigitalAdvanceCheck/public/assets/images/logo_2.jpg" alt="logo"></a> </th>
                            <th><h3 class="card-label"> Resumen General</h3></th>
                        </tr>
                       
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="jumbotron">
            @foreach($result as $key => $attemp)
                <h1 class="display-4"><b>Resultados Intento #{{$key}}</b></h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Persona: </th>
                                <th>Organización: </th>
                                <th>Tamaño Organización: </th>
                                <th>Correo Electrónico: </th>
                                <th>Teléfono de Contacto: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$attemp['Info']->name}} {{$attemp['Info']->last_name}}</td>
                                <td>{{$attemp['Info']->name_organization}} </td>
                                <td>{{$attemp['Info']->size_organization}} </td>
                                <td>{{$attemp['Info']->email}} </td>
                                <td>{{$attemp['Info']->phone_number}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="lead"></p>
                <hr class="my-4">
                <p><b>¿Qué significa este porcentaje?</b></p>
                <p> El {{$attemp['TotalScore']}}%, indica que las respuestas dadas en este intento, me muestran que estoy en el nivel de madurez: <b><h3>{{$attemp['Level']->visible_name}}</h3></b></p>
                {!!$attemp['Recomendations']->congrats !!}
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
                <h1 class="display-4"><b>Recomendaciones</b></h1>           
                <p class="lead"></p>
                <hr class="my-4">
                {!!$attemp['Recomendations']->remark !!}
                {!!$attemp['Recomendations']->recomendations !!}
                {!!$attemp['Recomendations']->best_practices !!}
                {!!$attemp['Recomendations']->conclusions !!}
            @endforeach
            <button onclick="window.print()" class="btn btn-primary mt-3">Imprimir</button>
            </div>
        </div>
    </div>
</div>
<!--end::Card-->


@endsection