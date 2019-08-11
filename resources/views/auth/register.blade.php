@extends('layouts.app')

@section('content')
<script src="{{ asset('js/register.js') }}" defer></script>

<link href="{{ asset('css/login-registro/register.css') }}" rel="stylesheet">

        @include('home.loading')
        <div class="containerRegister">
        <div id="register" class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Te damos la bienvenida a MiClub') }} <br>
                  <p class="condiciones">Tu equipo más cerca que nunca</p>
                </div>

                <div class="card-body">
                    <form method="POST" id='formularioRegistro' enctype="multipart/form-data" action="{{ route('register') }}" >
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}"  autocomplete="lastName" autofocus>

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="partner" class="col-md-4 col-form-label text-md-right">{{ __('Nro de Socio') }}</label>

                            <div class="col-md-6">
                                <input id="partner" type="text" class="form-control @error('partner') is-invalid @enderror" name="partner" value="{{ old('partner') }}"  autocomplete="partner" autofocus>

                                @error('partner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                              <select id="sex" name="sex"  class="form-control">
                              <option  style="background-color: black" disabled selected>Selecciona tu sexo</option>
                              <option style="background-color: black" id="sex"  name="sex" value="F">Femenino</option>
                              <option style="background-color: black" id="sex" name="sex" value="M">Masculino</option>
                              </select>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmacion de contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>
                        <div class="subirAvatar1">
                            <label for="avatar" class="labelAvatar">{{ __('Foto de perfil') }}</label>
                            <div class="subirAvatar">
                                <input style='display: none;' onchange='cambiar()' id="avatar" type="file" class=" @error('avatar') is-invalid @enderror" accept="image/*" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>
                                  <div id="info"></div>
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id='submit' type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                                <br>
                                <article class="condiciones">
                                  <article class="condiciones">
                                    <p> <br>Al continuar aceptas las <b>Condiciones del servicio </b> y la <b>Política de la privacidad </b> de MiClub </p>

                                    <p><b>¿Ya eres miembro de MiClub? <a class="loginDesdeRegistro" style="text-decoration: none" href={{ url('/login') }}>Inicia Sesión</a></b></p>
                                  </article>
                                </article>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
