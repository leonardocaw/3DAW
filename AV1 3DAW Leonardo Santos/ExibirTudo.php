<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";
$verificar=false;

    $conn=new mysqli($server, $user, $password, $banco);

    $sql="SELECT * FROM `disciplina`";
    $result = $conn->query($sql);
    if($result==true){
    $verificar=true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibir Tudo</title>
</head>
<body>
<?php
    
    if($verificar==true)
    {
    while($linha=mysqli_fetch_row($result))
    {
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
}
?>
</body>
</html>