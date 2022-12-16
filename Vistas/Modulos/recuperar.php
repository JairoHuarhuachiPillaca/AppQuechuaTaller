<?php
$empleados = new adminC();
$respuesta = $empleados-> RecuperarC();  
?>


<!DOCTYPE html>
<body >
    
    <form class="form-signin panel center-block " role="form">
        <h4 class="form-signin-heading siginsubTitl text-center">Por favor, escribe tu email </h4>
        <input type="email" class="form-control" placeholder="Correo electrónico" required autofocus>
        <button class="btn btn-lg btn-primary btn-block btnRecPass" type="submit">Recuperar contraseña</button>
        
      </form>
</body>
</html>
