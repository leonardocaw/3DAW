<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Nome=$_POST["Nome"];
    $Id=$_POST["Id"];
    $Periodo=$_POST["Periodo"];
    $IdPreRequisitos=$_POST["IdPreRequisitos"];
    $Creditos=$_POST["Creditos"];
    $conn=new mysqli($server, $user, $password, $banco);

    $sql="INSERT INTO `disciplina`(`nome`, `id`, `periodo`, `IdPreRequisitos`, `creditos`)
    VALUES ( '$Nome',$Id,$Periodo,$IdPreRequisitos,$Creditos)";
    echo $sql;
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
    <title>Criar Disciplina</title>
</head>
<body>
    <form action="CriarDisciplina.php" method="POST" >
        Nome:<input type="text" name="Nome"><br>
        Id:<input type="text" name="Id"><br>
        Periodo:<input type="text" name="Periodo"><br>
        Pré requisitos:<input type="text" name="IdPreRequisitos"><br>
        Creditos:<input type="text" name="Creditos"><br>
        <input type="submit" name="botao" value="enviar">
    </form> 
</body>
</html>