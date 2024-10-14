<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            
            if (is_int($numero) || $numero <= 0) {
                echo "Debes introducir un número entero positivo.";
            } else {
                while ($numero != 1){
                    if ($numero % 2 == 0){
                        $numero = $numero / 2;
                    } else {
                        $numero = ($numero * 3) + 1;
                    }
                echo "Numero Actualmente: " . $numero. "<br>";
    }
    }
    }
    
        
    ?>
    
    <form method="POST" action="">
        <label for="numero">NÚMERO:</label>
        <input type="number" id="numero" name="numero" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>