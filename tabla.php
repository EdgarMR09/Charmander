
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php include 'menu.php'; ?>

<header>
    <h1>Generador de tablas</h1>
    <p>Aprende las tablas de multiplicar</p>
</header>

<main>
    <h2>Ingresa un numero entero</h2>

    <form method="POST">
        <input type="number" name="numero"
               step="1" required>
        <button type="submit">Generar tabla</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        if (filter_var($numero, FILTER_VALIDATE_INT) !== false) {

            echo "<h2>Tabla del " . $numero . "</h2>";

            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>Operacion</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;

                echo "<tr>";
                echo "<td>$numero x $i</td>";
                echo "<td>$resultado</td>";
                echo "</tr>";
            }

            echo "</table>";

        } else {
            echo "<p>Escribe un numero entero valido.</p>";
        }
    }
    ?>
</main>

</body>
</html>
