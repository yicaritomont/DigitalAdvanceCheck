@extends('layouts.master-mini')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/register_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
       
        <br><br>
        @error('name')
            <span class="alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span><br>
        @enderror
        @error('email')
            <span class="alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span><br>
        @enderror
        @error('password')
            <span class="alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span><br>
        @enderror
        <div class="auto-form-wrapper">
            <form  method="POST" action="{{ route('register') }}">
            <h2 class="text-center mb-4">Regístrese</h2>
                <blockquote class="blockquote">
                    <p class="mb-0">Al registrarse acepta el tratamiento de datos personales.</p>
                </blockquote>
            @csrf
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombres">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Apellidos">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Correo Electrónico">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Número de Teléfono">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <select class="form-control" name="size_organization" id="size_organization">
                    <option>Tamaño de la organización</option>
                    <option value="M10">Menos de 10 Colaboradores</option>
                    <option value="M50">Menos de 50 Colaboradores</option>
                    <option value="M50M250">Más de 50 y Menos de 250 Colaboradores</option>
                    <option value="M250">Más de 250 Colaboradores</option>
                </select>
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="text" name="name_organization" id="name_organization" class="form-control" placeholder="Nombre de la organización">
                <div class="input-group-append">
                    <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Acepto los términos y condiciones </label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-dark btn-rounded submit-btn btn-block">REGISTRARME</button>
            </div>
            <div class="text-block text-center my-3">
                <span class="text-small font-weight-semibold">¿Ya tienes una cuenta ?</span>
                <a href="{{ url('/user-pages/login') }}" class="text-black text-small">Ingresa aquí</a>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection