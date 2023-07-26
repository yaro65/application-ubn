@extends('.layout/header1')
@section('page-content')

<div class="card align-items-center justify-content-center" id='es'>
    <div class="card shadow">
        <div class="card-body " id='az'>
        @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
                 @endif
              <h3 class="text-center">Connectez-vous</h3>
                 <h5 class="text-center">Veuillez bien entrer vos identifiants</h5>
                    <form action="{{route('conex')}}"  method="post"  class='form'>
                    @method('post')
                           @csrf
                        <div class='form-group mt-3'>
                            <label for="">Email</label>
                            <input name="email" type="email" class="form-control " value="{{ old('email') }}" required >
                        </div>

                        <div class='form-group mt-3'>
                            <label for="">Mot de passe</label>
                            <input type="pasword" name="password" class="form-control " value="{{ old('email') }}" required >
                        </div>
                        <p class="mt-2"><a href="">Mot de passe oublié ?</a></p>

                        <button type="submit" class='btn btn-dark mt-3'>Connexion</button>
                    </form>
           </div>
      </div>

</div>







@endsection 