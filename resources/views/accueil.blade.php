
@extends('./layout/headerac')

@section('page-content')

  <div id="le">
    | 
  </div>
  <div id="be">
    Bienvenue sur l'appli de <br>
     Université NAZI/BONI 
     </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-6">
        <img id="i" src="{{ asset('image/admin.jpg')}}" alt="">
        </div>
        <div class="col-4 offset-1" >
           <div class="card">
            <div class="card-body">
                <div id="se">
                    créées en 2023 par les apprenants de Simpplon <br>
                    en partenariat avec Django I
                </div>

                <div id="ec">
                    |
                </div >
                <div  id="ef">
                    Note d'information 
                </div>

                <div id="eg">
                    L'appli vous permet de créer un compt et <br>
                     propose divers service pour en savoir <br>
                     plus veuillez cliquer <a href="">Ici</a>
                </div>

            </div>
           </div>
        </div>

     </div>
    </div>




   

@endsection