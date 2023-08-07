<?php
 include('conexao.php');
 $id_usuario = $_GET['id_usuario'];
 $sql = "SELECT * FROM usuario where id_usuario = $id_usuario";
 $result = mysqli_query($con, $sql);
 $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados de Usuario</title>
</head>
<body>
    
</body>
</html>