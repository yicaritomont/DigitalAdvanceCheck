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
					Editar Formulario
				</h3>
				
			</div>
			{{Form::model($form, ['route' =>  ['form.update', $form->id], 'method' => 'put'])}}
			@csrf
			<div class="card-body">
				<div class="form-group">					
					<div class="form-group">
						{{ Form::label('title', 'Título Formulario') }}
                        {{ Form::text('title', $form->title, ['class' => 'form-control form-control-solid', 'placeholder' => 'Nombre del nivel de madurez']) }}
                        @if($errors->has('title'))
						<div class="alert alert-danger">
							{{ $errors->first('title') }}
						</div>	
                        @endif	
						
					</div>
                </div>
				<div class="form-group">
					{{ Form::label('dimension_id', 'Dimension') }}
					{{ Form::select('dimension_id', $dimension, null , ['class' => '']) }}
					@if($errors->has('dimension_id'))
					<div class="alert alert-danger">
						{{ $errors->first('dimension_id') }}
					</div>	
					@endif	
					
				</div>
				<div class="form-group">
					{{ Form::label('description', 'Descripción') }}
					{{ Form::textarea('description', $form->description, ['class' => 'form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
					@if($errors->has('description'))
					<div class="alert alert-danger">
						{{ $errors->first('description') }}
					</div>	
					@endif	
				</div>
            </div> 
           		<div class="card-footer">
					{{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}	
					<a href="{{route('form.index')}}" class="btn btn-secondary">Volver</a>
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