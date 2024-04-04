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
					Editar Nivel
				</h3>
				
			</div>
			{{Form::model($madurityLevel, ['route' =>  ['madurityLevel.update', $madurityLevel->id], 'method' => 'put'])}}
			@csrf
			<div class="card-body">
				<div class="form-group">					
					<div class="form-group">
						{{ Form::label('nombre', 'Nombre') }}
                        {{ Form::text('name', $madurityLevel->name, ['class' => 'form-control form-control-solid', 'placeholder' => 'Nombre de madurez']) }}
                        @if($errors->has('nombre'))
						<div class="alert alert-danger">
							{{ $errors->first('name') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('description', 'Descripción') }}
                        {{ Form::textarea('description', $madurityLevel->description, ['class' => 'form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('description'))
						<div class="alert alert-danger">
							{{ $errors->first('description') }}
						</div>	
                        @endif	
					</div>
                </div>
            </div> 
           		<div class="card-footer">
					{{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}	
					<a href="{{route('madurityLevel.index')}}" class="btn btn-secondary">Volver</a>
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