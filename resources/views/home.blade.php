@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <!-- Escribir aca -->
               <div class="card-header">Bienvenido</div>
               <div class="card-body">
                   @if (session('status'))
                       <div class="alert alert-success" role="alert">

                           {{ session('status') }}
                       </div>
                   @endif
                    <img lass="aside" src="/storage/{{Auth::user()->avatar }}" >
                   Estas logeado
               </div>
           </div>
       </div>
   </div>
</div>
@endsection