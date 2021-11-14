@extends('layouts.plantilla')


@section('contenido')

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/img1.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img6.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img5.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<br>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Programa Home Care</h5>
          <p class="card-text">contenido.</p>
          <a href="#" class="btn btn-primary">ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Servicios Home Care</h5>
          <p class="card-text">contenido.</p>
          <a href="#" class="btn btn-primary">ver</a>
        </div>
      </div>
    </div>
  </div>

<br>

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="imagenes\img16.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rejuvenece la piel</h5>
          <p class="card-text">contenido.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes\img18.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tonifica tu cuerpo</h5>
          <p class="card-text">contenido.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes\img17.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">El mejor tratamiento</h5>
          <p class="card-text">contenido.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="imagenes\img19.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Toma de muestras</h5>
          <p class="card-text">contenido</p>
        </div>
      </div>
    </div>
  </div>
  
  <br>
    
  <div class="card bg-dark text-white">
    <img src="imagenes\img2.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">titulo</h5>
      <p class="card-text">contenido.</p>
      <p class="card-text">contenido</p>
    </div>
  </div>

@endsection