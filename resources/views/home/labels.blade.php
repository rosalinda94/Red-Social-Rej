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
</section>

  <!-- Esto es para agregar posts -->
<section class="posteosUsuario">


<article class="posteos">
      @include('partials.labels')
</article>
</section>
  </div>
@endsection
