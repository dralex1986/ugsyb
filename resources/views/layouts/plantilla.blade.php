<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UG Salud & Belleza</title>
  </head>
  
  <body>
    
    <div class="text-center">
        <img src="imagenes\logo.jpeg" height="150px" >
    </div>
   
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #23b12a">
            <ul class="navbar-nav mx-auto " style="font-size: 20px">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Quienes Somos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #88e24b" style="color: white">
                  <li><a class="dropdown-item" href="#">Toma de muestras y Laborstorio clinico</a></li>
                  <li><a class="dropdown-item" href="{{route('homecare')}}">Home Care - Cuidado en casa</a></li>
                  <li><a class="dropdown-item" href="#">Estética Facial y Corporal</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Solicita nuestros servicios</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      

    @yield('contenido')


    <footer>
      <div class="container-fluid text-center p-1" style="background-color: #88e24b">
        <p class="small"> &copy Todos los derechos resservados :: Uribe Gonzalez Salud & Belleza ::  2021</p>
        </div>
    </footer>

     
    <!--<h1>Hello, world!</h1> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
   
  </body>
</html>