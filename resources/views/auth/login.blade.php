@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/login-registro/login.css') }}" rel="stylesheet">
@endpush
@section('content')
@include('home.loading')

<div class="containerLogin">
        <div id="login" class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('Inicia sesión en MiClub') }}<br>
                  <p class="condiciones">Tu equipo más cerca que nunca</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>
                            <br>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>
                                <br>
                                <article class="condiciones">
                                  <p> <br>Al continuar aceptas las <b>Condiciones del servicio </b> y la <b>Política de la privacidad </b> de MiClub </p>
                                  @if (Route::has('password.request'))
                                      <a class="registroDesdeLogin" href="{{ route('password.request') }}">
                                          {{ __('¿Olvido su contraseña?') }}
                                      </a>
                                  @endif
          <p><b>¿Aún no sos parte de MiClub? <a class="registroDesdeLogin" href={{ url('/register') }}>Registrate</a></b></p>
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
