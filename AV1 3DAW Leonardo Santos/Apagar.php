<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Id=$_POST["Id"];
    $conn=new mysqli($server, $user, $password, $banco);

    $sql="DELETE FROM `disciplina` WHERE `Id`=$Id";
    if(!$conn->query($sql)){
        echo($conn->error);
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apagar</title>
</head>
<body>
    <form action="Apagar.php" method="POST" >
        Id:<input type="text" name="Id"><br>
        <input type="submit" name="botao" value="enviar">
    </form> 
</body>
</html>