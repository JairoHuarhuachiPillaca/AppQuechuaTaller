<?php  //Modelos/adminM.php
    require_once "bd.php";

    class adminM extends ConexionBD{

        static public function inicioM($datosC){
            $cbd = ConexionBD::cBD();
            $useremail=$cbd->real_escape_string($datosC['emailS']);
            $userpass=$cbd->real_escape_string($datosC['contraS']);
            
            $q = "SELECT * FROM usuarios WHERE gmail='$useremail'";
            $result = $cbd->query($q);
            if ($result->num_rows)
            {
                $row = $result->fetch_array(MYSQLI_NUM);
                $result->close();
                return $row;
            }
        }

        static public function registrarM($datosC){
            $cbd = ConexionBD::cBD();
            if ($cbd->connect_error) die ("Fatal error");

            $nombre = $cbd-> real_escape_string($datosC["nombreE"]);
            $apellidos = $cbd-> real_escape_string($datosC["apellidosE"]);
            $email =$cbd-> real_escape_string($datosC["emailE"]);
            $tefefono =$cbd-> real_escape_string($datosC["telefonoE"]);
            $fechaN =$cbd-> real_escape_string($datosC["fnE"]);         
            $userpassword =$cbd-> real_escape_string($datosC["contraseñaE"]);
            
            $password = password_hash($userpassword, PASSWORD_DEFAULT);
            
            $insertar = "INSERT INTO usuarios values
            ('','$nombre', '$apellidos','$email','$tefefono','$fechaN','$password','2')";
            $result=$cbd->query($insertar);
            $cbd->close();
            
            
        }

        static public function MostrarDatosM($tablaBD){
            $cbd = ConexionBD::cBD();
            $query="SELECT * FROM $tablaBD ";
    
            $result = $cbd->query($query);
            return $result;
        }

    }
?>
