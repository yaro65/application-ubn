@extends('.layout/header1')
@section('page-content')

<div class="card align-items-center justify-content-center" id='es'>
    <div class="card shadow">
    @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
                 @endif
        <div class="card-body " id='az'>

              <h3 class="text-center">Connectez-vous</h3>
                 <h5 class="text-center">Veuillez bien entrer vos identifiants</h5>
                    <form action="{{route('connetion')}}"  method="post" class='form'>
                        @method('post')
                           @csrf
                        <div class='form-group mt-3'>
                            <label for="">Email</label>
                            <input name="email"type="email" class="form-control " value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Mot de passe</label>
                            <input name="password" type="pasword" class="form-control " value="{{ old('email') }}" required >
                        </div>

                        <div class="form-group">
                      <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember">
                         <label class="form-check-label" for="remember">
                        Se souvenir de moi
                         </label>
                            </div>
                          </div>

                        <p class="mt-2"><a href="">Mot de passe oublié ?</a></p>

                        <button type="submit" class='btn btn-dark mt-3'>Connexion</button>
                    </form>
                <p>Pas inscrit(e) <a href="{{route('insc')}}">Inscrivez-vous</a></p>
           </div>
      </div>

</div>







@endsection 