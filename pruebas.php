<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo corriente 220v</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-6">

                        <h3>Calculo corriente | 220[V] </h3>

                <!-- Formulario HTML para solicitar el número -->
                <form method="post" action="">
                    <label for="corriente220">Ingrese un valor en Watts:</label>
                    <input type="number" id="corriente220" name="corriente220" required>
                    <input type="submit" value="Calcular">
                </form>

                <?php
                    // Verifica si se ha enviado el formulario
                    if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['corriente220'])) {
                        // Obtén el número del formulario
                        $numero = $_POST['corriente220'];

                        // Asegúrate de que el número es un valor válido
                        if (is_numeric($numero)) {
                            // Realiza una operación matemática (por ejemplo, multiplicar por 2)
                            $resultado = $numero / (220*0.95);
                            $formateado = number_format($resultado,2);

                            // Muestra el resultado
                            echo "<h3>Resultado:</h3>";
                            echo "<p>$numero [Watts] equivalen a =>  $formateado [A]</p>";
                            echo "<p>Fomula: </br> Corriente[A] = Potencia[Watts] / (Voltaje * CosFi) </p>";
                            echo "<p> Se utilizó un CosFi de 0.95 para los cálculos </p>";
                        } else {
                            echo "<p></p>";
                        }
                    }
                ?>

        </div>

        <div class="col-lg-6">

                    <h3>Calculo corriente | 380[V] </h3>

            <!-- Formulario HTML para solicitar el número -->
            <form method="post" action="">
                <label for="numero">Ingrese un valor en Watts:</label>
                <input type="number" id="numero" name="numero" required>
                <input type="submit" value="Calcular">
            </form>

            <?php
            // Verifica si se ha enviado el formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
                // Obtén el número del formulario
                $numero = $_POST['numero'];

                // Asegúrate de que el número es un valor válido
                if (is_numeric($numero)) {
                    // Realiza una operación matemática (por ejemplo, multiplicar por 2)
                    $resultado = $numero / (1.73*380*0.95);
                    $formateado = number_format($resultado,2);

                    // Muestra el resultado
                    echo "<h3>Resultado:</h3>";
                    echo "<p>$numero [Watts] equivalen a =>  $formateado [A]</p>";
                    echo "<p>Fomula: </br> Corriente[A] = Potencia[Watts] / [ Voltaje * CosFi * Raiz(3) ]</p>";
                    echo "<p> Se utilizó un CosFi de 0.95 para los cálculos </p>";
                    echo "<p> Se utilizó un valor de 1.73 para raiz cuadrada de 3";
                } else {
                    echo "<p>Por favor, introduce un número válido.</p>";
                }
            }
            ?>


        </div>
    </div>

</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>