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
					Puntaje de dimensión.
				</h3>
				
			</div>
			{{Form::model($dimensionScore, ['route' => ['dimensionScore.store'], 'method' => 'post'])}}
			@csrf
			<div class="card-body">
				<div class="form-group">					
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
						{{ Form::label('madurity_level_id', 'Nivel Madurez') }}
						{{ Form::select('madurity_level_id', $nivel, null , ['class' => '']) }}
                        @if($errors->has('madurity_level_id'))
						<div class="alert alert-danger">
							{{ $errors->first('madurity_level_id') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('min_score', 'Rango mínimo') }}
                        {{ Form::text('min_score', $dimensionScore->min_score, ['class' => 'form-control form-control-solid', 'placeholder' => '_Rango mínimo']) }}
                        @if($errors->has('min_score'))
						<div class="alert alert-danger">
							{{ $errors->first('min_score') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('max_score', 'Rango Máximo') }}
                        {{ Form::text('max_score', $dimensionScore->max_score, ['class' => 'form-control form-control-solid', 'placeholder' => '_Rango Máximo']) }}
                        @if($errors->has('max_score'))
						<div class="alert alert-danger">
							{{ $errors->first('max_score') }}
						</div>	
                        @endif	
						
					</div>
					<div class="form-group">
						{{ Form::label('recomendations', 'Recomendaciones') }}
                        {{ Form::textarea('recomendations', $dimensionScore->recomendations, ['class' => 'ckeditor form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('recomendations'))
						<div class="alert alert-danger">
							{{ $errors->first('recomendations') }}
						</div>	
                        @endif	
					</div>
					<div class="form-group">
						{{ Form::label('remark', 'Observaciones') }}
                        {{ Form::textarea('remark', $dimensionScore->remark, ['class' => 'ckeditor form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('remark'))
						<div class="alert alert-danger">
							{{ $errors->first('remark') }}
						</div>	
                        @endif	
					</div>
					<div class="form-group">
						{{ Form::label('best_practice', 'Mejores Prácticas') }}
                        {{ Form::textarea('best_practice', $dimensionScore->best_practice, ['class' => 'ckeditor form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('best_practice'))
						<div class="alert alert-danger">
							{{ $errors->first('best_practice') }}
						</div>	
                        @endif	
					</div>
					<div class="form-group">
						{{ Form::label('congrats', 'Felicitaciones') }}
                        {{ Form::textarea('congrats', $dimensionScore->congrats, ['class' => 'ckeditor form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('congrats'))
						<div class="alert alert-danger">
							{{ $errors->first('congrats') }}
						</div>	
                        @endif	
					</div>
					<div class="form-group">
						{{ Form::label('conclusions', 'Conclusiones') }}
                        {{ Form::textarea('conclusions', $dimensionScore->conclusion, ['class' => 'ckeditor form-control form-control-solid', 'placeholder' => 'Descripción del nivel de madurez']) }}
						@if($errors->has('conclusions'))
						<div class="alert alert-danger">
							{{ $errors->first('conclusions') }}
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
	@push('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
<!--end::Entry-->          
@endsection