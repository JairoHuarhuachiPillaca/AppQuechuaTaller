<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <title>Aprendiendo-Quechua-Chanka</title>
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link href="Vistas\css\bootstrap-4.5.3\css\boot.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
    <section >
            <?php
                $rutas = new RutasControlador();
                $modulo = $rutas->Rutas();
                include $modulo;
            ?>
    </section>
    </body>

    
</html>
