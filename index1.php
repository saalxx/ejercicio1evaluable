<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

<h1>Ejercicio1</h1>
    <?php

    $numPaquete = 0;
    $ancho = 0;
    $largo = 0;
    $alto = 0;
    $precio = 0;
    $volumen = 0;
    $peso = 0;
    $zona = 0; //1 Cañarias 2 Baleares 
    $trasporte = 0; // 1 marino 2 aéreo 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numPaquete"])) {
            $numPaquete = $_POST["numPaquete"];
        } else {
            $numPaquete = 1; 
        }
        $ancho = $_POST["ancho"];
        $largo = $_POST["largo"];
        $alto = $_POST["alto"];
        $peso = $_POST["peso"];
        $zona = $_POST["zona"]; 
        $volumen = $ancho * $largo * $alto;
        
      
        

    if ($zona == 1) {
        $trasporte = rand (1,2);
    }
        if ($volumen <= 0.5 ) {
            $precio = 50 * $volumen;
        }
        elseif ($volumen  <= 1 ){
            $precio = 75 * $volumen;
        }
        elseif ($volumen > 1 ){
            $precio = 100 * $volumen;
        }


        if ($peso > 15) {
            echo "Su paquete no puede ser enviado por sobrepeso";
        }
        elseif ($peso >= 10 && $peso < 15) {
            $precio *= 1.50;
        }
        elseif ($peso >=5 ){
            $precio *= 1.25;
        }


        if ($zona == 2 && $trasporte == 2 ){
            $precio *= 1.11;
        }
        elseif ($zona ==  1 ){
            $precio *= 1.11;
            
        }
        

        $precio *= $numPaquete ; 

        echo "Precio: " . $precio;
   
}
    ?>
    <form action="" method = "POST">
    <label for="numPaquete">Numero de paquetes:</label>
    <input type="number" name="numPaquete" step="0.01" id="numPaquete">
    <br>
    <label for="ancho">Ancho:</label>
    <input type="number" name="ancho" step="0.01" id="ancho">
    <br>
    <label for="largo">Largo:</label>
    <input type="number" name="largo" step="0.01" id="largo">
    <br>
    <label for="alto">Alto:</label>
    <input type="number" name="alto" step="0.01" id="alto">
    <br>
    <label for="peso">Peso:</label>
    <input type="number" name="peso" step="0.01" id="peso">
    <br>
    <label for="zona">Zona (0 Peninsula 1 Canarias 2 Baleares) </label>
    <input type="number" name="zona" step="0.01" id="zona">
    <br>    
    <input type="submit" value="Enviar">

    </form>
</body>
</html>