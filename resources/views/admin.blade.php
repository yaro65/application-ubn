
@extends('./layout/header')

@section('page-content')
<style>
    .active {
      color: red !important; /* Changer la couleur ici */
    }
  </style>

               @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
                 @endif
<div class="row">
<div class="card col-3">
    <div class="card-body">
       <div id="le">
           | 
         </div>
        <div id="be">
         Bienvenue sur l'appli de <br>
         Université NAZI/BONI 
       </div>

       <div class='d-flex mt-5' >
        <img src="{{ asset('image/accueil.jpg')}}" alt="" id='im1'>
        <a id="a2" class='text-primary' href="">Accueil</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/secretaire.jpg')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('admin')}}">Sécretaire</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/etudiant.jpg')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('etude')}}">Etudiant</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/carte.webp')}}" alt="" id='im1'>
        <a id="a2"  href=" {{route('cartee')}}">Carte</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/Gmail.png')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('maham', ['invoice' => 12345]) }}">Envoyer un mail</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/deconnexion.png')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('deconnct')}}">Deconnexion</a>
       </div>

            
    </div>
   </div>
        
   <div class="col-3 mt-5">
     <div class="card">
        <div class="card-body">
            <img class="img-fluid" src="{{ asset('image/secretaire.jpg')}}" alt=""><br>
            <a   href="">secretaire</a>
        </div>
     </div>
   </div>
   <div class="col-3 mt-5 ">
   <div class="card ">
        <div class="card-body">
            <img src="{{ asset('image/etudiant.jpg')}}" alt="" class="img-fluid"><br>
            <a href="" class="text-success text-soul">Etudiant</a>
        </div>
     </div>
    </div> 
    <div class="col-3 mt-5">
    <div class="card">
        <div class="card-body">
            <img src="{{ asset('image/cartede.webp')}}" alt="" class="img-fluid"><br>
            <a href="">Carte</a>
        </div>
     </div>
    </div>
</div>
@endsection