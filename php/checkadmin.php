<?php

if($_SESSION['r_id_rol']!=1)
{
    echo '<script type="text/javascript">alert("Necesita ser admin");window.location="login.php"; </script>';
}

?>