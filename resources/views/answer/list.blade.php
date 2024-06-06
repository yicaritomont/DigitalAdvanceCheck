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
            Respuestas Agregadas para 
            <span class="d-block text-muted pt-2 font-size-sm">{{$question->statement}}</span>
            <a href="{{route('question.index')}}" class="btn btn-secondary">Volver a Pregunta</a>
        </h3>
    </div>
</div>
<div class="card-body">
<!--begin: Datatable-->
<table class="table table-bordered table-checkable" id="kt_datatable">
    <thead>
        <tr>                        
            <th>ID</th>
            <th>Opción</th>
            <th>Valor</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
            <tbody>
                @foreach($answers as $answer)
                    <tr>
                        <td>{{$answer->id}}</td>
                        <td>{{$answer->option}}</td>
                        <td>{{$answer->points}}</td>
                        <td>
                        <form action="{{ route('answer.updateStatus', $answer->id) }}" method="POST">   
                            @csrf
                            @method('PUT')
                            @if($answer->status == 1)
                                <button class="btn btn-icons btn-rounded btn-success" alt="activo" ><i class="mdi mdi-check-circle"></i></button>
                            @else
                                <button class="btn btn-icons btn-rounded btn-danger" alt="inactivo"><i class="mdi mdi-close-circle"></i></button>
                            @endif
                        </form>
                        </td>
                        <td>                           
                            <a href="{{route('answer.edit', $answer->id)}}" class="btn btn-primary">Editar</a>                                
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<!--end: Datatable-->
</div>
</div>
<!--end::Card-->


@endsection