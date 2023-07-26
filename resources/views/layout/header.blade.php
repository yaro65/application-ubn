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
    <div class="p-3 bg-success"  >
      <div class="row">
      <div class="col-1 offset-3">
   <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    cycle
  </button>
  <ul class="dropdown-menu bg-primary-subtle">
      <form action="{{route('cycl')}}" method='post' class='form'>
      @method('post')
           @csrf
           <div class='form-group mt-3'>
              <label for="">Nom</label>
              <input type="text" name='libelle_cycle' class="form-control " value="{{ old('nom') }}" required >
          </div>
        <button type="submit" class='btn btn-secondary mt-3'>Ajouter</button>
    </form>
  </ul>
</div>
   </div>
     

   <div class="col-1 ">
   <div class="dropdown ">
  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Filiere
  </button>
  <ul class="dropdown-menu bg-primary-subtle">
      <form action="{{route('fillie')}}" method='post' class='form'>
      @method('post')
           @csrf
           <div class='form-group mt-3'>
              <label for="">Nom</label>
              <input type="text" name='libelle_filiere' class="form-control " value="{{ old('filiere') }}" required >
          </div>
        <button type="submit" class='btn btn-secondary mt-3'>Ajouter</button>
    </form>
  </ul>
</div>
   </div>

   <div class="col ">
   <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Niveau d'étude
  </button>
  <ul class="dropdown-menu bg-primary-subtle">
      <form action="{{route('secre')}}" class='form' method='post'>
        @method('post')
           @csrf
           <div class='form-group mt-3'>
              <label for="">Niveau</label>
              <input type="text" name='libelle_niveau' class="form-control " value="{{ old('niveau_detude') }}" required >
          </div>
        <button type="submit" class='btn btn-secondary mt-3'>Ajouter</button>
    </form>
  </ul>
</div>
   </div>

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