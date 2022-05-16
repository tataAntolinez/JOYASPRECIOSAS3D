<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Logica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
       <div class="container">
           <h1 class="text-center">Actividad Logica</h1>
           <br>
           <div class="row">
               <div class="col-md-3">
                     <a href="proyecto1.php" class="btn btn-primary btn-block">Solucion 1</a>
               </div>
               <div class="col-md-3">
                     <a href="proyecto2.php" class="btn btn-primary btn-block">Solucion 2</a>
               </div>
               <div class="col-md-3">
                     <a href="proyecto3.php?fecha-1=<?php echo date('Y-m-d H:i:s');?>&fecha-2=<?php echo date('Y-m-d H:i:s');?>" class="btn btn-primary btn-block">Solucion 3</a>
               </div>
               <div class="col-md-3">
                     <a href="proyecto4.php? fecha= <?php echo date('Y-m-d H:i:s');?>" class="btn btn-primary btn-block">Solucion 4</a>
               </div>
           </div>
       </div>
</body>
</html>