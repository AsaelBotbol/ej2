<?php 
    include_once("./calculadora.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de daño</title>
</head>
<body>
    <h2>Calculadora de daño</h2>
    <form action="./index.php" method="POST">
        <label for = "vida">Vida actual: </label>
        <input type = "number" name = "vida"><br>

        <label for = "ataque"> Seleccione el tipo de ataque: </label>
        <select name = "ataque"> <br>
            <option value = "golpe">Golpe </option>
            <option value = "patada">Patada</option>
            <option value = "espadazo">Espadazo</option>
        </select>

        <br> <label for = "pocion" >Seleccione el tipo de pocion: </label> <br>
        <input type = "radio" name = "pocion" value = 0> Poción de veneno. <br>
        <input type = "radio" name = "pocion" value = 1> Poción de fuego. <br>
        <input type = "radio" name = "pocion" value = 2> Poción de adormecimiento. <br>

        <br><input type="submit" value="Calcular">


    </form>
    <h3>
    <?php
        if(isset($_POST["ataque"])){
            echo("Vida en el proximo turno: ".calcularVida($_POST["vida"],$_POST["ataque"],$_POST["pocion"]));
        }
    ?>
    </h3>
</body>
</html>