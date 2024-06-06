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
					Editar Respuesta
				</h3>
				
			</div>
			{{Form::model($answer, ['route' =>  ['answer.update', $answer->id], 'method' => 'put'])}}
			@csrf
			<div class="form-group">					
				<div class="form-group">
					{{ Form::label('option', 'Opción de respuesta ') }}
					{{ Form::hidden('question_id', $answer->question_id, ['class' => 'form-control form-control-solid']) }}
					{{ Form::text('option', $answer->option, ['class' => 'form-control form-control-solid', 'placeholder' => 'Opción de Respuesta']) }}
					@if($errors->has('option'))
					<div class="alert alert-danger">
						{{ $errors->first('option') }}
					</div>	
					@endif	
					
				</div>
			</div>
			<div class="form-group">					
				<div class="form-group">
					{{ Form::label('points', 'Puntos para respuesta') }}
					{{ Form::text('points', $answer->points, ['class' => 'form-control form-control-solid', 'placeholder' => 'ejemplo : 2.5 , 0 , 1.3 ...']) }}
					@if($errors->has('points'))
					<div class="alert alert-danger">
						{{ $errors->first('points') }}
					</div>	
					@endif	
					
				</div>
			</div>
			<div class="card-footer">
				{{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}	
				<a href="{{route('question.index')}}" class="btn btn-secondary">Volver</a>
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