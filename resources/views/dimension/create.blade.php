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
					Añadir Dimensión
				</h3>
				
			</div>
			{{Form::model($dimension, ['route' => ['dimension.store'], 'method' => 'post'])}}
			@csrf
			<div class="card-body">
				<div class="form-group">					
					<div class="form-group">
						{{ Form::label('nombre', 'Nombre') }}
                        {{ Form::text('name', $dimension->name, ['class' => 'form-control form-control-solid', 'placeholder' => 'Nombre del nivel de madurez']) }}
                        @if($errors->has('name'))
						<div class="alert alert-danger">
							{{ $errors->first('name') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('min_range', 'Rango mínimo') }}
                        {{ Form::text('min_range', $dimension->min_range, ['class' => 'form-control form-control-solid', 'placeholder' => '_Rango mínimo']) }}
                        @if($errors->has('nombre'))
						<div class="alert alert-danger">
							{{ $errors->first('min_range') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('max_range', 'Rango Máximo') }}
                        {{ Form::text('max_range', $dimension->max_range, ['class' => 'form-control form-control-solid', 'placeholder' => '_Rango Máximo']) }}
                        @if($errors->has('nombre'))
						<div class="alert alert-danger">
							{{ $errors->first('max_range') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('factor', 'Factor') }}
						{{ Form::select('factor', $factor, null , ['class' => '']) }}
                        @if($errors->has('factor'))
						<div class="alert alert-danger">
							{{ $errors->first('factor') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('description', 'Descripción') }}
                        {{ Form::textarea('description', $dimension->description, ['class' => 'form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('description'))
						<div class="alert alert-danger">
							{{ $errors->first('description') }}
						</div>	
                        @endif	
					</div>
                </div>
            </div> 
           		<div class="card-footer">
					{{ Form::submit('Registrar', ['class' => 'btn btn-primary']) }}	
					<a href="{{route('dimension.index')}}" class="btn btn-secondary">Volver</a>
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