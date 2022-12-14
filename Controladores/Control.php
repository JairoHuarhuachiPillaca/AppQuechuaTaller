<?php  //Controladores/adminC.php

class adminC{
    public function inicioC(){
        $cbd = ConexionBD::cBD();
        //nuevo inicio
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            if(isset($_POST["log"]) ){
                $datosC= array();
                $datosC['emailS']=$cbd->real_escape_string($_POST['correo']);
                $datosC['contraS']=$cbd->real_escape_string($_POST['contra']);

                
                $respuesta = adminM::inicioM($datosC);
                $hash =$respuesta[6];
                
                if(password_verify($_POST['contra'],$respuesta['6'] ))
                {
                    session_start();
                    $_SESSION['Ingreso']=true; 
                    $_SESSION['id_rol']=$respuesta[6];
                    switch ($respuesta['7']) {
                        case 1:
                            
                            header("location: index.php?ruta=admin");
                            
                        break;
                        
                        case 2:
                            
                            header("location: index.php?ruta=menu");
                        break;
                        
                        default:
                    }
                }
                ?> <script >
                alert('Datos incorrectos');
                window.location.href='index.php?ruta=ingreso';
                </script> <?php
               
                
                
             
            }
        }
    }

    public function RegistraC(){
        $cbd = ConexionBD::cBD();
        //nuevo inicio
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            if(isset($_POST["register"]) ){
                $datosC= array();
                $datosC["nombreE"]=$_POST['nombres'];
                $datosC["apellidosE"]=$_POST['apellido'];
                $datosC["emailE"]=$_POST['correo'];
                $datosC["telefonoE"]=$_POST['tel'];
                $datosC["fnE"]=$_POST['fn'];
                $datosC["contraseñaE"]=$_POST['contraseñ'];
                
                $respuesta = AdminM::registrarM($datosC);
                
                ?> <script >
                alert('Registro exitoso');
                window.location.href='index.php?ruta=ingreso';
                </script> <?php
            }
            
        }else {
            
        }
        
    }

    public function MostrarDatosC(){
        $tablaBD = 'usuarios';
        $respuesta = AdminM::MostrarDatosM($tablaBD );
        return $respuesta;
        
    }

    public function adC(){
        echo('modulo admin');
        header("location: index.php?ruta=admin");
       
    }

    public function salirC(){

        session_destroy();
        header("location:index.php?ruta=ingreso");
       
    }

    

    static public function sesionIniciadaC(){
        
        if(!isset($_SESSION['Ingreso']))
            return true; 
       
    }

}

?>
