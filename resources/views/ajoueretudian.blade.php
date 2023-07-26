
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
        <a id="a2"  href="{{route('secretaire')}}">Accueil</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/etudiant.jpg')}}" alt="" id='im1'>
        <a id="a2" class='text-primary' href="">Etudiant</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/carte.webp')}}" alt="" id='im1'>
        <a id="a2"  href="">Carte</a>
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
   
   
     <div class="col-9">
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
     <a href=""> Ajouter</a>
   </button>

   <table class="container table table-responsive mt-3 table-bordered border-dark">
   <tr class="table-dark">
        <th>N</th>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Clycle</th>
        <th>Niveau</th>
        <th>Année </th>
        <th>Action</th>
    </tr>
    </table>
     </div>
 </div>
    


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card">
          <div class="card-body " >
              <h3 class="text-center">Inscrivez-vous</h3>
              <form action="{{route('yaroma')}}" method="post" class='form' enctype="multipart/form-data">
          @method('post')
          @csrf
    <div class='form-group mt-3'>
        <label for="">Matricule</label>
        <input type="text" name="matricule" class="form-control" value="{{ old('matricule') }}" required>
    </div>
    <div class='form-group mt-3'>
        <label for="">Nom</label>
        <input type="text" name="nom"  class="form-control" value="{{ old('nom') }}" required>
    </div>
    <div class='form-group mt-3'>
        <label for="">Prenom</label>
        <input type="text" name="prenom"  class="form-control" value="{{ old('prenom') }}" required>
    </div>

    <div class='form-group mt-3'>
        <label for="">Date de naissance</label>
        <input type="date" name="date_naissace"  class="form-control" value="{{ old('prenom') }}" required>
    </div>

    <div class='form-group mt-3'>
        <label for="">Email</label>
        <input type="text" name="email"  class="form-control" value="{{ old('prenom') }}" required>
    </div>

    <div class="form-group mt-3">
    <label for="">Sexe</label>
    <select name="sexe" class="form-control" required>
        <option value="">Sélectionner le sexe</option>
        <option value="masculin" {{ old('sexe') == 'masculin' ? 'selected' : '' }}>Masculin</option>
        <option value="féminin" {{ old('sexe') == 'féminin' ? 'selected' : '' }}>Féminin</option>
        <option value="autre" {{ old('sexe') == 'autre' ? 'selected' : '' }}>Autre</option>
    </select>
</div>


      <div class='form-group mt-3'>
        <label for="">Nationalité</label>
        <input type="text" name="nationalite"  class="form-control" value="{{ old('prenom') }}" required>
    </div>

    <div class='form-group mt-3'>
        <label for="">Filiere</label>
        <select class="form-control" name="filiere" required>
            <option value="">Sélectionner une filière</option>
            @foreach ($filiers as $filier)
                <option value="{{ $filier->id }}">{{ $filier->libelle_filiere }}</option>
            @endforeach
        </select>
    </div>

    <div class='form-group mt-3'>
        <label for="">Cycle</label>
        <select class="form-control" name="cycle" required>
            <option value="">Sélectionner un cycle</option>
            @foreach ($cycles as $cycle)
                <option value="{{ $cycle->id }}">{{ $cycle->libelle_cycle}}</option>
            @endforeach
        </select>
    </div>

    <div class='form-group mt-3'>
        <label for="">Niveau d'étude</label>
        <select class="form-control" name="niveau_detude" required>
            <option value="">Sélectionner un niveau d'étude</option>
            @foreach ($niveaux as $niveau)
                <option value="{{ $niveau->id }}">{{ $niveau->libelle_filiere}}</option>
            @endforeach
        </select>
    </div>

    <div class='form-group mt-3'>
        <label for="">Année académique</label>
        <input type="date" name="annee_accademique" class="form-control" value="{{ old('annee_accademique') }}" required>
    </div>

    <div class="form-group mt-3">
    <label for="photo">Photo :</label>
    <input type="file" name="image" class="form-control" id="photo" required>
     </div>


    <button type="submit" class='btn btn-dark mt-3'>Inscrire</button>
</form>

            </div>
       </div>
     </div>
  </div>
</div>
@endsection