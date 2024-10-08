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
        Listado de usuarios
        <span class="d-block text-muted pt-2 font-size-sm">Cree o edite los usuarios</span>
    </h3>
</div>
<div class="card-toolbar">
   
<!--begin::Button-->
<a href="{{ route('users.create') }}" class="btn btn-primary font-weight-bolder">
<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"/>
<circle fill="#000000" cx="9" cy="15" r="6"/>
<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
</g>
</svg><!--end::Svg Icon--></span>	Nuevo Usuario
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
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Empresa</th>
        </tr>
        </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}} {{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->name_organization}}</td>                       
                    </tr>
                @endforeach
            </tbody>
        </table>
<!--end: Datatable-->
</div>
</div>
<!--end::Card-->


@endsection