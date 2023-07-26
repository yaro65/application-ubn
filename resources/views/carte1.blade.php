
<!DOCTYPE html>
<html lang="en">
<head> <script src="{{ asset('js/color-modes.js')}} "></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <title>Document</title>
</head>
<body>


<script>
  // Exemple d'objet avec la propriété annee_accademique
let objetAvecPropriete = {
  annee_accademique: "2023-2024",
  // autres propriétés...
};

// Exemple de vérification si l'objet est nul avant d'accéder à la propriété
if (objetAvecPropriete !== null) {
  let annee = objetAvecPropriete.annee_accademique;
  console.log(annee); // Affiche "2023-2024"
} else {
  console.log("L'objet est nul.");
}

</script>
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
<script src="{{ asset('js/bootstrap.bundle.min')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.all.min.js"></script>
  
</body>
</html>
