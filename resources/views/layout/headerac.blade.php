<!DOCTYPE html>
<html lang="en">
<head> <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/getbootstrap.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <title>Document</title>
</head>
<body>
<style>
  body{
    margin: 0px;
    padding: 0px;
  }
  .row{
    margin: 0px;
    padding: 0px;
  }
</style>
<header class=" row">
  <div class="p-1 text-center bg-success">
        <img id="im" src="{{ asset('image/phone.png')}} " alt=""> +226 57 53 14 41
    </div>
    <div class="p- text-center"  id="he">
        <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <img id="ime"  src="{{ asset('image/univbobo.png')}}" alt="">
               Université 
               <div id="mo">
               NAZI/BONI
               </div>
              
            </div>
            <!-- <div class="col">
          
            </div> -->
            <div class="col-9" id="de">
            <img id="ime" src="{{ asset('image/faso.png')}}" alt="">
               BURKINA FASO
               <div id="ma">
               Unité-Progrès-Justice 
               </div> 
            </div>
        </div>
        </div>
       
       
    </div>
    <div class="p-2 text-center bg-success"  >
<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Connexion
  </button>
  <ul class="dropdown-menu bg-dark">
  <li><a id="ab" class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('connec')}}">
        <span class="d-inline-block bg-success rounded-circle p-1"></span>
        Connexion Admin
      </a></li>
      <li><a id="ab" class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('secreta')}}">
        <span class="d-inline-block bg-primary rounded-circle p-1"></span>
        Connexion Secretaire
      </a></li>

      <li><a id="ab" class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
        <span class="d-inline-block bg-danger rounded-circle p-1"></span>
        Something else here
      </a></li>
  </ul>
</div>
</div>
</header>


<br>
      

@yield('page-content') 



</div>
<div  class="text-center p-4 mt-3 bg-success">
  <p class="text-white"> 
    Copyritgh @ Tous les droits sont reserver 2023
  </p>

</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.all.min.js"></script>




</body>
</html>