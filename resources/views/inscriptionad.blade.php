@extends('.layout/header1')
@section('page-content')

<div class="card align-items-center justify-content-center" id='es'>
    <div class="card shadow">

                  @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                 @endif

        <div class="card-body " id='az'>
              <h3 class="text-center">Inscrivez-vous</h3>
                 <h5 class="text-center">Veuillez bien entrer vos identifiants</h5>
                    <form action="{{route('enregistre')}}"  method="post"class='form'>                       
                           @method('post')
                           @csrf
                        <div class='form-group  mt-3'>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Numéro</label>
                            <input type="telephone" name="telephone" class="form-control " value="{{ old('numeron') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Mot de passe</label>
                            <input type="pasword" name="password"  class="form-control " value="{{ old('pasword') }}" required >
                        </div>

                        <div class="input mt-2">
                        <div class="input">
                        <input class="form-check-input mt-1" type="checkbox" value="" aria-label="Checkbox for following text input">
                         <label for="">J'accepte les <a href="">Conditions d'Utilisation</a> </label>
                      </div>
                       </div>

                        <button type="submit" class='btn btn-dark mt-3'>Inscrire</button>
                    </form>
                <p>Déjà inscrit(e)? <a href="{{route('connec')}}">Connexion-vous</a></p>
           </div>
      </div>

</div>







@endsection 