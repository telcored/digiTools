<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <?php echo '<div style=" border:solid 2px; height: 400px; width:500px; border-radius:10px;padding:30px;">'; ?>
        
        <h3>Potencia | 380 [V] </h3>

        <!-- Formulario HTML para solicitar la potencia -->
        <form method="post" action="https://telcored.com/index.php/calculos-electricos/#referencia3">
            <label for="potencia380">Ingrese un valor en Amperes:</label>
            <input type="number" id="potencia380" name="potencia380" style="border-radius: 10px;width:100px;" required>
            <button class="btn btn-danger" style="border-radius: 10px; background-color: #A71715; border:0px;"><b>Calcular</b></button>
        </form>
        
        
        <!--Aqui mostramos el resultado del calculo-->
        </br></br> <h3 style="display:inline;">Resultado:   </h3><h3 id="resultado380p"  style="display:inline;"> </h3></br>

        <?php

    


            // Verifica si se ha enviado el formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtén el ID del formulario
                $numero = $_POST['potencia380'];

                // Asegúrate de que el número es un valor válido
                if (is_numeric($numero)) {


                    // Realiza operación matemática 
                    $resultado = $numero * 380 * 0.95 * 1.73;
                    $formateado = number_format($resultado, 2);

                    // Muestra el resultado
                    echo "</br>";
                    echo 'Formula:';
                    echo '<p style="margin:0; padding:0; ">  </br>Potencia[W] = Corriente[A] * 220 [V] * CosFi * raiz(3)</p>';
                    echo '<p style="margin:0; padding:0; "> Se utilizó un CosFi de 0.95 para los cálculos </p>';
                    echo '<p > Se utilizó valor de 1.73 para la raiz de 3 </p>';
              
                    echo '</br>';

                


                    function actualizarContenido($contenido) {
                        echo '<h3 id="resultado"></h3>';
                        echo '<script>';
                        echo 'var contenido = "' . addslashes($contenido) . '  [W] ";';  
                        echo 'document.getElementById("resultado380p").innerText = contenido;';
                        echo '</script>';
                    }
                    
                    // Ejemplo de uso de la función
                    actualizarContenido($formateado);
 
                              
                } else {
                    echo "<p></p>";
                }
            }

        ?>

    <?php echo '</div>'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>