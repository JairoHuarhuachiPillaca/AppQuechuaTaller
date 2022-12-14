<?php  
class ConexionBD{
    
    static public function cBD(){
        $cbd = new mysqli('localhost','root','','quechua');
        return $cbd;
    }
}
?>