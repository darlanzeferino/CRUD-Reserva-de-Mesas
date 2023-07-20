<?php

include('../database/conn.php');





// Execute uma consulta para contar o número de linhas
$sql = "SELECT COUNT(*) as total FROM registro_mesas";
$resultado = mysqli_query($conn, $sql);

// Verifique se a consulta foi bem sucedida
if (mysqli_num_rows($resultado) > 0) {
    // Processar o resultado da consulta
    $row = mysqli_fetch_assoc($resultado);
     $row["total"];
} else {
    echo "Nenhum resultado encontrado.";
}

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--STILOS CSS-INCLUDES -->
        <link rel="stylesheet" href="CSS/painel.css">

    <title>Painel Administrativo</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

<body>


<div class="title">
  <img src="perfil/perfil1.png" alt="">

  <img src="perfil/perfil1.png" alt="">
</div>

<div class="containerr pt-5"   >
<h1>PAINEL RESERVAS MESAS</h1>

 <table class="table text-center mt-2 "  style="width:100%">
  <thead>
    <tr class="bg-info  "> 
      <th scope="col">ID</th>
      <th scope="col">Nº MESA</th>
      <th scope="col">NOME</th>
      <th scope="col">QTD PESSOAS</th>
      <th scope="col">TEL RESERVA</th>
    
    
      <th scope="col">AÇÕES</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
        
    $sql="SELECT * FROM registro_mesas ORDER BY id DESC" ;
    $result=mysqli_query($conn,$sql);

    if($result){
    while ($row = $result->fetch_assoc()) {
      $id=$row['id'];
      $nmesa=$row['num_mesa'];
      $nome=$row['nome_reserva'];
      $qtd=$row['qtd_pessoas'];
      $telR=$row['tel_reserva'];
       
      
        echo
    '<tr>
      <th>'.$id.'</th>
       <td>'.$nmesa.'</td>
      <td>'.$nome.'</td>
      <td>'.$qtd.'</td>
      <td>'.$telR.'</td>


      <td>
      <style>
        a{
          text-decoration:none;
        }
      </style>
      <button class="btn btn-warning  " ><a href="../actions/update.php?updateid='.$id.'""  class="text-light">EDITAR </a></button>
      <button class="btn btn-danger"><a href="../actions/delete.php?deleteid='.$id.'""  class="text-light">DELETAR</a></button>
      </td>
    </tr>';

}
}
  
    ?>