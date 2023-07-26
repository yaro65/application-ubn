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
<header class=" row p-4 bg-success" id='ed' >
        <div class="row">
            <div class="col-12 text-center" id='di'>
                <img id="ime"  src="{{ asset('image/univbobo.png')}}" alt="">
               Université   NAZI/BONI
              
            </div>
      </div>
</header>


<br>
      

@yield('page-content') 



</div>
<div  class="text-center p-4 mt-3 bg-success" id="fo">
  <p class="text-white">
      Copyritgh @ Tous les droits sont reserver 2023 
  </p>

</div>

<script src="{{ asset('js/bootstrap.bundle.min')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.all.min.js"></script>




</body>
</html>