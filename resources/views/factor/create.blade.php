@extends('layouts.master')
@section('content')
<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
			<div class="row">
	<div class="col-lg-12">
		<!--begin::Card-->
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">
					Añadir Factor
				</h3>
				
			</div>
			{{Form::model($factor, ['route' => ['factor.store'], 'method' => 'post'])}}
			@csrf
			<div class="card-body">
				<div class="form-group">					
					<div class="form-group">
						{{ Form::label('nombre', 'Nombre') }}
                        {{ Form::text('name', $factor->name, ['class' => 'form-control form-control-solid', 'placeholder' => 'Nombre del nivel de madurez']) }}
                        @if($errors->has('name'))
						<div class="alert alert-danger">
							{{ $errors->first('name') }}
						</div>	
                        @endif	
						
					</div>
                </div>
            </div> 
           		<div class="card-footer">
					{{ Form::submit('Registrar', ['class' => 'btn btn-primary']) }}	
					<a href="{{route('factor.index')}}" class="btn btn-secondary">Volver</a>
				</div>
				
			{{ Form::close() }}
		</div>
		<!--end::Card-->

		
	</div>
	
</div>
		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->          
@endsection