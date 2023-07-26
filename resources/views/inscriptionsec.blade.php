
@extends('./layout/header')

@section('page-content')


<style>
    .active {
      color: red !important; /* Changer la couleur ici */
    }
  </style>
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
        <a id="a2"  href="{{route('administ')}}">Accueil</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/secretaire.jpg')}}" alt="" id='im1'>
        <a id="a2" class='text-primary' href="">Sécretaire</a>
       </div>

       <div class='d-flex mt-3'>
        <img src="{{ asset('image/etudiant.jpg')}}" alt="" id='im1'>
        <a id="a2"  href="{{route('etude')}}">Etudiant</a>
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
     Ajouter
   </button>

   <table class="container table table-responsive table-bordered  p-3 mb-5 bg-body-tertiary rounded fw-bold">
            <tr class="table-dark">
                <th>N</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Numero</th>
                <th>Action</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>

            @php
            $i = 1;
            @endphp
            @foreach($secretaires as $secretaire)
            <tr>
                <td>{{ $i }}</td>
                <td>{{$secretaire->name}}</td>
                <td>{{$secretaire->email}}</td>
                <td>{{$secretaire->telephone}}</td>
                <td>
                    <a class="btn btn-danger" href="#" onclick="return confirmDelete()">Supprimer</a>
                </td>
                <td>
                    <a class="btn btn-info" href="#">Modifier</a>
                </td>
            </tr>
            @php
            $i++;
            @endphp
            @endforeach
        </table>
       
   </div>      
</div>




<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
           <div class="card">
            <div class="card-body " >
              <h3 class="text-center">Inscrire une Sécretaire</h3>
                 <h5 class="text-center">Veuillez bien entrer les identifiants</h5>
                    <form action="{{route('secre')}}" class='form' method='post'>
                           @method('post')
                           @csrf
                    <div class='form-group  mt-3'>
                            <label for="">Nom</label>
                            <input type="text" name='name' class="form-control" value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group  mt-3'>
                            <label for="">Email</label>
                            <input type="email" name='email' class="form-control" value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Numéro</label>
                            <input type="text" name='telephone' class="form-control " value="{{ old('numeron') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Mot de passe</label>
                            <input type="pasword" name='password' class="form-control " value="{{ old('pasword') }}" required >
                        </div>

                        <button type="submit" class='btn btn-dark mt-3'>Inscrire</button>
                    </form>
             </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection