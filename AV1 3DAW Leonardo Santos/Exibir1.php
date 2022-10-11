<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";
$linha=array("", "", "", "", "");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Id=$_POST["Id"];
    $conn=new mysqli($server, $user, $password, $banco);

    $sql="SELECT * FROM `disciplina` WHERE `Id`= $Id";
    $result = $conn->query($sql);
    if($result==true){
    
    $linha= mysqli_fetch_row($result);

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibir1</title>
</head>
<body>
    <form action="Exibir1.php" method="POST" >
        Id:<input type="text" name="Id"><br>
        <input type="submit" name="botao" value="enviar">
    </form> 
<?php
    
    if(isset($_POST["botao"])){
    echo "<table>
    <tr> 
    <td>Nome</td>
    <td>Id</td>
    <td>Periodo</td>
    <td>Pre-Requisito</td>
    <td>Creditos</td>   

     </tr>
     <tr>
     <td> $linha[0] </td>
     <td> $linha[1] </td>           
     <td> $linha[2] </td>
     <td> $linha[3] </td>
     <td> $linha[4] </td> 
     </tr>
    </table>";
}
?>
</body>
</html>