@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/logged/headerLogged.css') }}" rel="stylesheet">
@endpush
@section('footer')
  <footer>
<nav  class="footer">
<div class="empresa">
  <p clas="derechos">2019 Mi Club. Todos los derechos reservados.</p>
</div>
<div class="redes">
  <ul>
    <a href="http://www.twitter.com"><i class="fab fa-twitter  fa-lg" style=""></i></a>
    <a href="http://www.facebook.com"><i class="fab fa-facebook-square fa-lg" style=""></i></a>
    <a href="http://www.instagram.com"><i class="fab fa-instagram fa-lg" style=""></i></a>
  </ul>
</div>
</nav>
</footer>

@endsection
