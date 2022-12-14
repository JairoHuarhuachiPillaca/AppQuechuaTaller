<?php //  Modelos/rutasM.php
class Modelo{
    static public function RutasModelo($rutas){
        if( $rutas == 'ingreso' ||
            $rutas == 'admin' || 
            $rutas == 'registrar' || 
            
            $rutas == 'menu' ||
            $rutas == 'salir'
            )
        {
            $pagina = "Vistas/Modulos/".$rutas. ".php";
        }
        else if($rutas == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }
}
?>