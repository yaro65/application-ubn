
@extends('./layout/header')

@section('page-content')

<style>
    .active {
      color: red !important; /* Changer la couleur ici */
    }
  </style>
<div class="row">
  <div class="col-3">
    <div class="card">
       <div id="le">
           | 
         </div>
        <div id="be">
         Bienvenue sur l'appli de <br>
         Université NAZI/BONI 
       </div>

       <div class='d-flex mt-5' >
        <img src="{{ asset('image/accueil.jpg')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('administ')}}">Accueil</a>
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
        <a id="a2" class='text-primary'  href="">Carte</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/Gmail.png')}}" alt="" id='im1'>
        <a id="a2"  href="">Envoyer un mail</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/deconnexion.png')}}" alt="" id='im1'>
        <a id="a2"  href="">Deconnexion</a>
       </div>       
    </div>
   </div> 
  </div>
  <section class="container-fluid mt-3">
      <div class="row">
         <div class="col-md-12">
            <div class="row mt-6 ">
   @foreach ($etudiants as $etudiant)
             <div class="col-4 mt-3">
                 <div class='card '>
                  <div class="col d-flex">
                  <div class="col">
                    <h3><samp style='color:blue; font-weight: 700;'>U N</samp> <samp style='color:red; font-weight: 700;' >B</samp> </h3>
                    <p class="aa"> UNIVERSITE   NAZI BONI</p>
                    </div>
                    <div class="col">
                    <h6 class="aa1" >UNIVERSITE NAZI/BONI</h6>
                    <P class="aa2">UFR/Analyse et Programmation</P>
                    </div>
                  </div>
                  <hr class="aa3">
                  <p class="aa4">Carte d'étudiant</p>
                    <p class="aa5">Année universitaire: <span  style="color:blue;">{{ $etudiant->annee_accademique}}</span></p>
                  <div class="d-flex">
                    <div>
                    <img src='{{ $etudiant->image}}'  height='75' width='110'>
                    <p id="yar">Cycle: {{ $etudiant->cycle}}</p>
                    </div>
                    <div>
                      <p id="ya">Matricule: {{ $etudiant->matricule}}</p>
                      <p id="ya">Nom: {{ $etudiant->nom}}</p>
                      <p id="ya">prenom: {{ $etudiant->prenom}}</p>
                      <p id="ya">Né le: {{ $etudiant->date_naissace}} <span style="color:white;">  .... ...</span> Nationalité:  <span class="text-success font-weight:600;"> {{ $etudiant->nationalite}}</span></p>
                      <p id="ya">Sexe: {{ $etudiant->sexe}}</p>
                      <p id="ya">Niveau : {{ $etudiant->niveau_detude}}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
         </div>
      </div>
   </section>
    

@endsection