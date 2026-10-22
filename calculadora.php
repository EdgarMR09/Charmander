
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja">
    <h1>Calculadora</h1>

    <form method="POST">
        <input type="number" step="any" name="numero1" placeholder="Primer número" required>
        <input type="number" step="any" name="numero2" placeholder="Segundo número" required>
        <br><br>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $a = $_POST['numero1'];
        $b = $_POST['numero2'];

        if (is_numeric($a) && is_numeric($b)) {
            echo "<h3>Resultados</h3>";
            echo "Suma: " . ($a + $b) . "<br>";
            echo "Resta: " . ($a - $b) . "<br>";
            echo "Multiplicación: " . ($a * $b) . "<br>";

            if ($b != 0) {
                echo "División: " . ($a / $b);
            } else {
                echo "No se puede dividir entre cero.";
            }
        } else {
            echo "Ingresa números válidos.";
        }
    }
    ?>
</div>

</body>
</html>
