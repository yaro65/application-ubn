@extends('layout.header')

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
    <div class="col-3">
        <div class="card">
            <div id="le">
                <p>|</p>
            </div>
            <div id="be">
                Bienvenue sur l'appli de <br>
                Université NAZI/BONI
            </div>

            <div class='d-flex mt-5'>
                <img src="{{ asset('image/accueil.jpg')}}" alt="Accueil" id='im1'>
                <a id="a2" href="{{route('administ')}}">Accueil</a>
            </div>

            <div class='d-flex mt-3'>
                <img src="{{ asset('image/secretaire.jpg')}}" alt="Sécretaire" id='im1'>
                <a id="a2" href="{{route('admin')}}">Sécretaire</a>
            </div>

            <div class='d-flex mt-3'>
                <img src="{{ asset('image/etudiant.jpg')}}" alt="Etudiant" id='im1'>
                <a id="a2" class='text-primary' href="{{route('etude')}}">Etudiant</a>
            </div>

            <div class='d-flex mt-3'>
                <img src="{{ asset('image/carte.webp')}}" alt="Carte" id='im1'>
                <a id="a2" href="{{route('cartee')}}">Carte</a>
            </div>

            <div class='d-flex mt-3'>
                <img src="{{ asset('image/Gmail.png')}}" alt="Envoyer un mail" id='im1'>
                <a id="a2" href="#">Envoyer un mail</a>
            </div>

            <div class='d-flex mt-3'>
                <img src="{{ asset('image/deconnexion.png')}}" alt="Déconnexion" id='im1'>
                <a id="a2" href="#">Déconnexion</a>
            </div>
        </div>
    </div>

    <div class="col-9">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter
        </button>

        <table class="container table table-responsive table-bordered  p-3 mb-5 bg-body-tertiary rounded fw-bold">
            <tr class="table-dark">
                <th>N</th>
                <th>Matricule</th>
                <th>Supprimer</th>
                <th>Plus</th>
                <th>pdf
                    
                </th>
            </tr>

            @php
            $i = 1;
            @endphp
            @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $i }}</td>
                <td>{{$etudiant->matricule}}</td>
                <td>
                    <a class="btn btn-danger" href="{{route('supprimer', $etudiant->id)}}" onclick="return confirmDelete()">Supprimer</a>
                </td>

                <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$etudiant->id}}">
             Carte
            </button>
            <div class="modal fade" id="staticBackdrop{{$etudiant->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$etudiant->id}}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel{{$etudiant->id}}">Carte de l'etudiant</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                             <section class="container-fluid mt-3">
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
                           </section>
                           <a class='btn btn-success mt-3' href="{{route('carte', $etudiant->id)}}">Envoyer</a>
                         <!-- <button type="submit" class='btn btn-success mt-3'>Envoyer</button> -->
                         </div>
                        </div>
                      </div>
                    </div>
                </td>

                <td>
                    &nbsp;&nbsp;
                    <a targe="_blank" title="Print PDF Invoice"
                     href="{{route('carte', $etudiant->id)}}" class="btn btn-info"><i style="font-size:15px;" class="mdi mdi-file-pdf">Telecharger pdf</i></a>
                </td>
                <td>
                &nbsp;&nbsp;
                    <a 
                     href="{{route('mail', $etudiant->id)}}" class="btn btn-info"><i>Email</i></a>
                </td>
            </tr>
            @php
            $i++;
            @endphp
            @endforeach
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
                <div class="card-body">
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
                <option value="{{ $filier->libelle_filiere }}">{{ $filier->libelle_filiere }}</option>
            @endforeach
        </select>
    </div>

    <div class='form-group mt-3'>
        <label for="">Cycle</label>
        <select class="form-control" name="cycle" required>
            <option value="">Sélectionner un cycle</option>
            @foreach ($cycles as $cycle)
                <option value="{{ $cycle->libelle_cycle }}">{{ $cycle->libelle_cycle}}</option>
            @endforeach
        </select>
    </div>

    <div class='form-group mt-3'>
        <label for="">Niveau d'étude</label>
        <select class="form-control" name="niveau_detude" required>
            <option value="">Sélectionner un niveau d'étude</option>
            @foreach ($niveaux as $niveau)
                <option value="{{ $niveau->libelle_niveau }}">{{ $niveau->libelle_niveau}}</option>
            @endforeach
        </select>
    </div>

    <div class='form-group mt-3'>
        <label for="">Année académique</label>
        <input type="text" name="annee_accademique" class="form-control" value="{{ old('annee_accademique') }}" required>
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