@extends('layouts.admin')
@section('content')

{{-- <div style="background-image: url('{{ asset('assets/img/hero-bg.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
    <h1 style="color: rgb(221, 114, 13); text-align: center; padding-top: 20%;">Bienvenido a CarawasHappy</h1>
</div> --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicadores (opcional) -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  
    <!-- Contenedor de imágenes -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Primera imagen">
        <div class="carousel-caption d-none d-md-block">
          <h5>Primera Imagen</h5>
          <p>Descripción de la primera imagen.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/img/about.jpg') }}" alt="Segunda imagen">
        <div class="carousel-caption d-none d-md-block">
          <h5>Segunda Imagen</h5>
          <p>Descripción de la segunda imagen.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/img/moto1.jpg') }}" alt="Tercera imagen">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tercera Imagen</h5>
          <p>Descripción de la tercera imagen.</p>
        </div>
      </div>
    </div>
  
    <!-- Controles (anterior/siguiente) -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

@endsection