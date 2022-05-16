<?php
    $num1=0;
    $num2=0;
    $resultado=0;


    if ( isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['opcion'])) {
      $num1 = $_GET['num1'];
      $num2 = $_GET['num2'];
      $opcion = $_GET['opcion']; 
      switch ($opcion) {
            case ' + ':
                  $opcion = "suma";
                  $resultado = sumar($num1, $num2);
                  break;
            case ' - ':
                  $opcion = "Resta";
                  $resultado = restar($num1, $num2);
                  break;
            case ' X ':
                  $opcion = "Multiplicacion";
                  $resultado = multiplicar($num1, $num2);
                  break;
            case ' / ':
                  $opcion = "Divicion";
                  $resultado = dividir($num1, $num2);
                  break;
      }
    }

 function sumar($num1, $num2){
     $res = $num1 + $num2;
     return $res;

    }

 function restar($num1, $num2){
     $res = $num1 - $num2;
     return $res;

    }

 function multiplicar($num1, $num2){
     $res = $num1 * $num2;
     return $res; 

    }

 function dividir($num1, $num2){
     $res = $num1 / $num2;
     return $res;

    }      
 ?>
 <section>
    <h1>calculadora basica</h1>
    <div class="row">
        <div class="col">
             <form method="GET" action="index.php">
                 <h3>Ingresar los numeros</h3>
                 <label>
                     Numero 1
                 </label>
                 <input type="number" name="num1">
                 <label>
                     Numero 2
                 </label>
                 <input type="number" name="num2">

                 <div>
                   <input type="submit" name = "opcion" value=" + ">
                   <input type="submit" name = "opcion" value=" X ">
                   <input type="submit" name = "opcion" value=" - ">
                   <input type="submit" name = "opcion" value=" / ">
                 </div>
            </form>

        </div>

        <div class="col">
            <div class="datos">
                <h3>
                 Opcion:    
                </h3>
                <h5> resultado: <?php echo $resultado ?> </h5>
            </div>
        </div> 
    </div>
</section>  