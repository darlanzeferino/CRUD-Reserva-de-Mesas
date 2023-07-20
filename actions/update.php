<?php
include('../database/conn.php');

$id = $_GET['updateid'];
// Fetch all rows from the 'cadastro' table
$sql = "SELECT * FROM registro_mesas WHERE id=$id";
$result = mysqli_query($conn, $sql);

// Check if the query execution was successful
if ($result) {
  // Fetch each row and store its values in variables
  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $nMesa = $row['num_mesa'];
    $nomeReserva = $row['nome_reserva'];
    $qtdPessoas = $row['qtd_pessoas'];
    $telReserva = $row['tel_reserva'];
 
  }
} 

// Check if the form has been submitted
if (isset($_POST['update'])) {

  // Get the form data

  $nMesa = $_POST['nMesa'];
  $nomeReserva = $_POST['nomeReserva'];
  $qtdPessoas = $_POST['qtdPessoas'];
  $telReserva = $_POST['telReserva'];

  // Update the corresponding row in the 'cadastro' table
  $sql = "UPDATE registro_mesas SET num_mesa='$nMesa', nome_reserva='$nomeReserva', qtd_pessoas='$qtdPessoas', tel_reserva='$telReserva' WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  // Check if the query execution was successful
  if ($result) {
    // Redirect to the home page
    header('location:../views/home.php');
    exit;
  } else {
    // Display an error message if the query execution failed
    die(mysqli_error($conn));
  }
}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/Novostyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="../img/logoxibenacuia1.fw.png">
	<div class="container">
		<div class="img">
			
		</div>
		<div class="login-content">
        <form id="casdastro-form" method="post">
		


        <h3 class="title">EDITAR RESERVA</h3>

           <div class="input-div one">
              <div class="i">
                  
              </div>
              <div class="div">
             
                      <input type="text" name="nMesa" value="<?php echo $nMesa ?>" placeholder="Numero da Mesa" class="input">
              </div>
           </div>
           <div class="input-div pass">
              <div class="i"> 
                   
              </div>
              <div class="div">
                   
                   <input type="text" name="nomeReserva" value="<?php echo $nomeReserva ?>" placeholder="Nome Reserva" class="input">
           </div>
        </div>
        <div class="input-div pass">
              <div class="i"> 
                   
              </div>
              <div class="div">
                   
                   <input type="text" name="qtdPessoas" value="<?php echo $qtdPessoas ?>" placeholder="Qtd Pessoas" class="input">
           </div>
        </div>
        <div class="input-div pass">
              <div class="i"> 
                   
              </div>
              <div class="div">
                   
                   <input type="text" name="telReserva"value="<?php echo $telReserva ?>" placeholder="Tel Reserva" class="input">
           </div>
        </div>
    

        
        <input type="submit" class="btn" name="update"  value="ALTERAR">
  
        
    </form>
    </div>
  </div>

</body>
</html>



<script src="main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
