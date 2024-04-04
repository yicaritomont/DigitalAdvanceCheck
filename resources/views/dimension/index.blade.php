@extends('layouts.master')
@section('content')
@if (session('message'))
    <div class="alert alert-{{session('alert')}}" role="alert">
        {{ session('message') }}
    </div>
@endif
<!--begin::Card-->
<div class="card card-custom gutter-b">
<div class="card-header flex-wrap py-3">
<div class="card-title">
    <h3 class="card-label">
        Dimensiones
        <span class="d-block text-muted pt-2 font-size-sm">Cree, edite o elimine las dimensiones</span>
    </h3>
</div>
<div class="card-toolbar">
   
<!--begin::Button-->
<a href="{{ route('dimension.create') }}" class="btn btn-primary font-weight-bolder">
<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"/>
<circle fill="#000000" cx="9" cy="15" r="6"/>
<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
</g>
</svg><!--end::Svg Icon--></span>	Nueva Dimensión
</a>
<!--end::Button-->
</div>
</div>
<div class="card-body">
<!--begin: Datatable-->
<table class="table table-bordered table-checkable" id="kt_datatable">
    <thead>
        <tr>                        
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
            <tbody>
                @foreach($dimension as $dimens)
                    <tr>
                        <td>{{$dimens->id}}</td>
                        <td>{{$dimens->name}}</td>
                        <td>
                        <form action="{{ route('dimension.updateStatus', $dimens->id) }}" method="POST">   
                            @csrf
                            @method('PUT')
                            @if($dimens->status == 1)
                                <button class="btn btn-icons btn-rounded btn-success" alt="activo" ><i class="mdi mdi-check-circle"></i></button>
                            @else
                                <button class="btn btn-icons btn-rounded btn-danger" alt="inactivo"><i class="mdi mdi-close-circle"></i></button>
                            @endif
                        </form>
                        </td>
                        <td><a href="{{route('dimension.edit', $dimens->id)}}" class="btn btn-primary">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<!--end: Datatable-->
</div>
</div>
<!--end::Card-->


@endsection