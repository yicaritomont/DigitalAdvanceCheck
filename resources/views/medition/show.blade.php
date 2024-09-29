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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> # Intento</th> 
                            <th> % Madurez Dig. </th> 
                            <th> Nivel</th> 
                            <th> Detalles </th> 
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($result as $key => $attemp)
                        @php
                        $dataIndividual =  json_encode($attemp['DimensionsGraph']);
                        @endphp
                        <tr>
                            <td class="py-1">{{$key}}</td>
                            <td><div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$attemp['TotalScore']}}%;" aria-valuenow="{{$attemp['TotalScore']}}" aria-valuemin="0" aria-valuemax="100">{{$attemp['TotalScore']}}%</div></td> 
                            <td><p><b><h4>{{$attemp['Level']->visible_name}}</h4></b></p></td> 
                            <td> 
                                <button type="button" class="btn btn-dark btn-rounded btn-fw btn-index btn-lg" data-bs-toggle="modal" data-bs-target="#ModalAttemp{{$key}}">
                                    Ver más
                                </button> 
                                <div class="modal fade" id="ModalAttemp{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" style="max-width: 80% !important;" >
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="jumbotron row">
                                                <h1 class="display-4"><b>Resultados Intento #{{$key}} : {{$attemp['Level']->visible_name}}</b></h1>
                                                <div class="progress" style="height: 20px;">
                                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$attemp['TotalScore']}}%;" aria-valuenow="{{$attemp['TotalScore']}}" aria-valuemin="0" aria-valuemax="100">{{$attemp['TotalScore']}}%</div>
                                                </div>
                                                <p class="lead"></p>
                                                <hr class="my-4">
                                                <p><b>¿Qué significa {{$attemp['Level']->visible_name}} ?</b></p>
                                                <p class="wrap">{{$attemp['Level']->description}}</p>
                                                <p> Este resultado se obtuvo de la sumatoria por cada dimensión, a continuación conoceras tus resultados individales : </p>
                                                <div class="table-responsive col-6" style="margin-top: 7%;">
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
                                                <div class="col-6">
                                                    <input type="hidden" id="result_dimension" value="{{json_encode($dimensions)}}">
                                                    <input type="hidden" id="result_dimension_dataset_individual_{{$attemp['attempt']}}" value="{{$dataIndividual}}">
                                                    <canvas id="myChartModal_{{$attemp['attempt']}}" class="chart-50"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td> 
                        </tr> 
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="hidden" id="result_dimension" value="{{json_encode($dimensions)}}">
                        <input type="hidden" id="result_dimension_dataset" value="{{json_encode($dataGraph)}}">
                        <canvas id="myChart" class="chart-50"></canvas>
                    </div>
                    <div class="col-6">
                        <input type="hidden" id="result_levels" value="{{json_encode($result_levels)}}">
                        <input type="hidden" id="result_dimension_level" value="{{json_encode($dataLevelGraph)}}">
                        <canvas id="myChart2" class="chart-50"></canvas>
                    </div>
                </div>
        </div>
    </div>
    <div>
        <hr>
    </div>
    
</div>
@endsection
<!--end::Card-->



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
window.onload = function() {
    const ctx = document.getElementById('myChart');
    const ctx2 = document.getElementById('myChart2');
    var informationchart = JSON.parse($("#result_dimension").val());
    var informationLevels = JSON.parse($("#result_levels").val());
    var informationchartdataset = JSON.parse($("#result_dimension_dataset").val());
    var result_dimension_level = JSON.parse($("#result_dimension_level").val());
    
    
    // Selecciona todos los elementos cuyo id contenga "myChartModal"
    const elements = document.querySelectorAll('[id*="myChartModal"]');
    
    // Iterar sobre los elementos
    elements.forEach((element, index) => {
        var id =  element.id.split("_");
        //Modales- inputs dinámicos.
        const ctxModal = document.getElementById('myChartModal_'+ id[1]);
        var result_dimension_dataset_individual =  JSON.parse($("#result_dimension_dataset_individual_"+id[1]).val());
        const dataIndividual = {
            labels: informationchart,
            datasets: result_dimension_dataset_individual
        };
        new Chart(ctxModal, {
            type: 'radar',
            data: dataIndividual,
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            }
        });
    });
    
    const data = {
        labels: informationchart,
        datasets: informationchartdataset
    };
   
    const dataLevel = {
        labels: informationLevels,
        datasets: result_dimension_level
    };
    new Chart(ctx, {
        type: 'radar',
        data: data,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        }
    });

    new Chart(ctx2, {
        type: 'radar',
        data: dataLevel,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        }
    });

    
}
</script>

