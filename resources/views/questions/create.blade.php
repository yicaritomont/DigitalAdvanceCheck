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
					Añadir Pregunta
				</h3>
				
			</div>
			{{Form::model($question, ['route' => ['question.store'], 'method' => 'post'])}}
			@csrf
			<div class="card-body">
			    <div class="form-group">
					{{ Form::label('form_id', 'Formulario') }}
					{{ Form::select('form_id', $form, null , ['class' => '']) }}
					@if($errors->has('form_id'))
					<div class="alert alert-danger">
						{{ $errors->first('form_id') }}
					</div>	
					@endif	
					
				</div>
				<div class="form-group">					
					<div class="form-group">
						{{ Form::label('statement', 'Enunciado Pregunta') }}
                        {{ Form::text('statement', $question->statement, ['class' => 'form-control form-control-solid', 'placeholder' => 'Nombre del nivel de madurez']) }}
                        @if($errors->has('statement'))
						<div class="alert alert-danger">
							{{ $errors->first('statement') }}
						</div>	
                        @endif	
						
					</div>
                </div>
				
				<div class="form-group">
					{{ Form::label('help_information', 'Descripción') }}
					{{ Form::textarea('help_information', $question->help_information, ['class' => 'form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
					@if($errors->has('help_information'))
					<div class="alert alert-danger">
						{{ $errors->first('help_information') }}
					</div>	
					@endif	
				</div>
            </div> 
           		<div class="card-footer">
					{{ Form::submit('Registrar', ['class' => 'btn btn-primary']) }}	
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