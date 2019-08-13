@extends('layouts.app')

@push('styles')
<link href="{{ asset('css/logged/profileLogged.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- Esto es la portada  -->
  <div class="perfilLogueado">
<section class="portadaUsuario">
<div class="infoUsuario">
  <div class="cuadrado4">
    <img id="fotoPerfil4" src="{{ Storage::url(Auth::user()->person->avatar) }}"  alt="">
  </div>
  <h3 class="user-name">{{Auth::user()->person->name }} {{Auth::user()->person->lastName }}</h3>
</div>


  <form class="fotoPortada" action="index" method="post" enctype="multipart/form-data">
    <label for="avatar" class="labelAvatar">{{ __('Foto de portada') }}</label>
    <input style='display: none;' id="avatar" type="file" class=" @error('avatar') is-invalid @enderror" accept="image/*" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
  </form>
</section>

<section class="datosUsuario">
  <!-- Esto es para registrar los datos adicionales -->
<article class="infoGeneral">

    <h4>Datos Adicionales</h4>
   @include('partials.register')
   
</article>

  <!-- Esto es para mostrar la imagen abajo -->
<article class="fotosUsuario">
  <img src="storage\{{ Auth::user()->person->avatar }}" alt="" width="100px">
</article>
</section>

  <!-- Esto es para agregar posts -->
<section class="posteosUsuario">
<article class="posteos">
      @include('partials.posteo')
</article>


  <!-- Esto es para ver los posts -->
<article class="posteos">
      @include('partials.perfil')
</article>
</section>
  </div>
@endsection
