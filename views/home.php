<?php
session_start();

if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombres'])) {

?>
     <!DOCTYPE html> 
     <html>       
     
     <head>
          <title>Tienda Virtual</title>   
          <link rel="stylesheet" type="text/css" href="css/home.css">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="icon" href="https://img.icons8.com/fluency/48/000000/link.png" type="image/x-icon">
          <link rel="icon" href="img/car.png" type="image/x-icon">
          <script src="js/jquery.js"></script>  
          <script src="js/bootstrap.min.js"></script>    
          <script src="js/producto.js"></script>  
          <link rel="stylesheet" type="text/css" href="css/producto.css">  
          <link href="css/bootstrap.min.css" rel="stylesheet">  
     </head>
    
     <body onload="data()">

          <div class="row">    
               <div class="col-10">
                    <h1>Bienvenido, <?php echo $_SESSION['nombres']; ?></h1>
               </div>
               <div class="col-2">
                    <a href="../models/logout.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Salir</a>
               </div>

          </div>

          <div class="row">
               <div class="col-1"></div>
               <div class="col-10">
                    <table id="products" class="table">
                         <thead class="table-success">
                              <tr>
                                   <?php if ($_SESSION['perfil'] == "ADMIN") { ?><th scope="col"></th> <?php } ?>
                                   <th scope="col">#</th> 
                                   <th scope="col">Nombre</th> 
                                   <th scope="col">Cantidad</th> 
                                   <th scope="col">Precio</th> 
                                   <th scope="col">Descripción</th>
                              </tr>
                         </thead>
                         <tbody>

                         </tbody>
                    </table>
               </div>
               <div class="col-1"></div>
          </div>
          <?php if ($_SESSION['perfil'] == "ADMIN") { ?>
               <a href="producto.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar Producto</a>
          <?php } ?>
          
     </body>

     </html>

<?php 
} else { 
     header("Location: ../index.php");
     exit();
} 
?>