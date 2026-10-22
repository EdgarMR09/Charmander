<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1> Promedio Escolar</h1>

    <form action="" method="POST">
    <label for="1"> Calificacion 1: </label>
    <input type= "number" step="any" name="c1" id="c1" required>
    <br></br>

    <label for="2"> Calificacion 2: </label>
    <input type= "number" step="any" name="c2" id="c2" required>
    <br></br>


    <label for="3"> Calificacion 3: </label>
    <input type= "number" step="any" name="c3" id="c3" required>
    <br></br>
    
    <button type= "submit" name="calcular"> Calcular Promedio </button>
    </form>
</body>
<?php
    if (isset($_POST['calcular'])) {
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];

        if ($c1 < 0 || $c1 > 100 || $c2 < 0 || $c2 > 100 || $c3 < 0 || $c3 > 100) {
            echo "<p style='color:red;'>Las calificaciones deben estar entre 0 y 100.</p>";
        } 
        
        else {
            $promedio = ($c1 + $c2 + $c3) / 3;
            $promedio_formateado = number_format($promedio, 2);

            echo "<h3>El promedio es: <strong>$promedio_formateado</strong></h3>";

            if ($promedio >= 70) {
                echo "<p style='color:green; font-weight:bold;'>ESTUDIANTE APROBADO</p>";
            } else {
                echo "<p style='color:red; font-weight:bold;'>ESTUDIANTE REPROBADO</p>";
            }
        }
    }
?>
</html>

