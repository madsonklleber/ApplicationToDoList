<?php
define("HOST", "3306"); 
define("USER", "madson_userdb");
define("PASSWORD", "user123");
define("DATABASE", "madson_todo");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>



<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- bootstrap css -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!-- main css -->
 <link rel="stylesheet" href="css/main.css">
 <!-- google fonts -->
 <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">




 <!-- font awesome -->
 <link rel="stylesheet" href="css/all.css">
 <title>Lista de itens a fazer</title>
 <style>
 </style>
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col mx-auto col-md-8 mt-3 text-center">
    <div class="alert text-capitalize feedback">
     Por favor escreva algo para o item
    </div>
    <!-- form -->
    <br>
    <form id="itemForm" class="my-3">
     <h3 class="text-capitalize mb-4">Lista de atividades</h3>
     <div class="input-group">
      <input type="text" class="form-control text-capitalize" id="itemInput" placeholder="Escreva sua atividade...">
      <div class="input-group-append">
       <button class="btn btn-green text-capitalize" type="submit">Adicionar item</button>
      </div>
     </div>
    </form>
    <div class="item-container">
     <!-- end of form  -->
     <div class="item-list my-5">
  
     </div>
     <button type="button" class="btn btn-green my-3 text-capitalize" id="clear-list">Limpar itens</button>
    </div>
   </div>
  </div>
 </div>




 <!-- jquery -->
 <script src="js/jquery-3.3.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="js/bootstrap.bundle.min.js"></script>
 <!-- script js -->
 <script src="js/app.js"></script>
</body>

</html>