<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";
$vazio= false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Nome=$_POST["Nome"];
    $Id=$_POST["Id"];
    $Periodo=$_POST["Periodo"];
    $IdPreRequisitos=$_POST["IdPreRequisitos"];
    $Creditos=$_POST["Creditos"];
    $conn=new mysqli($server, $user, $password, $banco);

    if(empty($Nome) && empty($Periodo)&& empty($IdPreRequisitos) &&empty($Creditos))
        {
            $vazio = true;
        }
        else{ if(empty($Nome)){
                    $sql = "UPDATE `disciplina` SET `periodo` = $Periodo,`IdPreRequisitos`=$IdPreRequisitos,`creditos`=$Creditos WHERE `id`= $Id";
                }
            else {
                if(empty($Periodo)){
                    $sql = "UPDATE `disciplina` SET `nome`='$Nome',`IdPreRequisitos`=$IdPreRequisitos,`creditos`=$Creditos WHERE `id`= $Id";
                }
                else {
                    if(empty($IdPreRequisitos)){
                        $sql = "UPDATE `disciplina` SET `nome`='$Nome',`periodo`= $Periodo,`creditos`=$Credito WHERE `id`= $Id";
                    }
                        else {
                            if(empty($Creditos)){
                            $sql = "UPDATE `disciplina` SET `nome`='$Nome',`periodo`= $Periodo,`IdPreRequisitos`=$IdPreRequisitos WHERE `id`= $Id";
                            echo $sql;
                        }
                        else
                        {
                            
                            $sql = "UPDATE `disciplina` SET `nome`='$Nome',`periodo`= $Periodo,`IdPreRequisitos`= $IdPreRequisitos,`creditos`= $Creditos WHERE `id`= $Id";
                        }
                    }
                }
                if(!$conn->query($sql)){
                    echo($conn->error);
                }
            }
        }
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar</title>
</head>
<body>
    <form action="Alterar.php" method="POST" >
        Nome:<input type="text" name="Nome"><br>
        Id:<input type="text" name="Id"><br>
        Periodo:<input type="text" name="Periodo"><br>
        Pré requisitos:<input type="text" name="IdPreRequisitos"><br>
        Creditos:<input type="text" name="Creditos"><br>
        <input type="submit" name="botao" value="enviar">
    </form><?php
    if($vazio==true){
        echo "<p> Preencha algo </p>";
    }
        ?>
</body>
</html>