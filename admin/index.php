<?php  session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
</head>
<body>
<?php if (isset($_SESSION['ativa'])) { ?>

?>


  <h1>
<?php 
echo"Escala de Folga";

?>

  </h1>  

  <?php } else {
    header("location: login.php");
  } ?>


</body>
</html>