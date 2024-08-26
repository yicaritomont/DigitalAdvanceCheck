@extends('layouts.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<!--begin::Card-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')

<div class="row mt-5">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-auto-fix text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Paso 1</p>
            <div class="fluid-container">
              <h2 class="font-weight-medium text-right mb-0">Mi Medición <br> #{{$attemptsInProgressCount}}</h2>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <a  href="{{ route('startForm.index') }}" class="btn btn-warning btn-lg"
          @if ($attemptsCompletedCount >= 3) 
            style="pointer-events: none; opacity: 0.5;" 
            title="Ya completo los 3 intentos"
          @endif> Iniciar Medición</a>
          <hr>
          <i class="mdi mdi-information mr-1" aria-hidden="true"></i>Tendrás una serie de fomularios que permitirán evaluar tu estado actual. </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Paso 2</p>
            <div class="fluid-container">
              <h2 class="font-weight-medium text-right mb-0">Mis resultados</h2>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <a  href="{{ route('showResults') }}" class="btn btn-success btn-lg" 
          @if ($attemptsCompletedCount < 1) 
            style="pointer-events: none; opacity: 0.5;" 
            title="Complete at least one attempt to unlock this button"
          @endif> Ver Mis Resultados</a>
          
          <hr>
          <i class="mdi mdi-information mr-1" aria-hidden="true"></i>Podrás conocer los resultados de tu medición una vez almacenes el formulario completo. Recuerda que tienes 3 evaluaciones disponibles. </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-primary icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Paso 3</p>
            <div class="fluid-container">
              <h2 class="font-weight-medium text-right mb-0">Mis Recomendaciones</h2>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <a  href="{{ route('showRecomendations') }}" class="btn btn-primary btn-lg"
          @if ($attemptsCompletedCount < 1) 
            style="pointer-events: none; opacity: 0.5;" 
            title="Complete at least one attempt to unlock this button"
          @endif> Ver Recomendaciones</a>
          <hr>
          <i class="mdi mdi-information mr-1" aria-hidden="true"></i>Según tus resultados tendrás disponible una serie de recomendaciones para tu proceso de estabilización en madurez digital. </p>
      </div>
    </div>
  </div>
  
</div>



@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush