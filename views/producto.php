<?php
session_start();

if (isset($_SESSION['id_usuario']) && isset($_SESSION['nombres'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Tienda virtual</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/car.png" type="image/x-icon"> 
        <script src="js/jquery.js"></script>  
        <script src="js/bootstrap.min.js"></script>  
        <script src="js/producto.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/producto.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">  
    </head> 
  
    <body onload="areas(), estados(), select()>
        <div class="row">    
            <div class="col-12">  
                <h1 style="text-align: center;">Datos del producto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div> 
            <div class="col-6">
                <div class="message"></div>
                <form id="productos">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name"></textarea>
                    </div> 

                    <div class="mb-3">
                        <label for="stock" class="form-label">Cantidad</label>
                        <input type="stock" class="form-control" id="cantidad" rows="6" cols="49"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="price" rows="6" cols="49"></textarea> 
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input id="imagen" type="file" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea type="text" class="form-control" id="description" rows="6" cols="49"></textarea>
                    </div>
                   
                    <button type="button" id="back" onclick="history.go(-1);" class="btn btn-warning mb-3">Regresar</button>
                    <button type="button" id="btn" class="btn btn-primary mb-3">Guardar</button>
                    <button type="button" id="btnEdit" class="btn btn-primary mb-3">Editar</button>  
                </form>
            </div>
            <div class="col-3"></div>
        </div>

    </body>

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>