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


