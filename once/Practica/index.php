<?php
    include("cn.php");
    $usuarios = "SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>LOGIN</th>
                <th>PASS</th>
                <th>SEXO</th>
            </tr>
        </thead>
        <?php $resultado = mysqli_query ($conexion, $usuarios);
        while($row=mysqli_fetch_assoc($resultado)) {?>
        <tbody>
            <tr>
                <td><?php echo $row ["ID"];?></td>
                <td><?php echo $row ["NOMBRE"];?></td>
                <td><?php echo $row ["LOGIN"];?></td>
                <td><?php echo $row ["PASS"];?></td>
                <td><?php echo $row ["SEXO"];?></td>
            </tr>
            <?php } mysqli_free_result($resultado); ?>
        </tbody>
    </table>
</body>
</html>