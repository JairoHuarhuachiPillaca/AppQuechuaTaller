<?php
$ingreso = new adminC();
$ingreso->inicioC()
?>
<html>
<style >
    @font-face {
  font-family: Poppins;
  src: url("fonts/Poppins-Regular.ttf");
  
}
</style>

<body >
<div class="container-portada">
    <div class="container my-5 d-flex justify-content-center" >
                        <div  class="form" style="background-color:#D476FA ;box-shadow: 7px 10px #ACB6B7;opacity: 0.91 ;  box-sizing: border-box;border-radius: 10px; padding: 2px 1px 0 0 ; top: 50%;  left: 50%;margin-top:1% ;padding :25px">                        
                                <div>
                                    <img style="float:left;margin-top: auto;" src="img/un.png" class="img-circle"  width="50" class="my-4">
                                    <img style="float:right;margin-top: auto;" src="img/x.jpg" class="img-circle" width="65" class="my-4">
                                    <h1 style="font-size: 1.5vw;display: flex;  justify-content: center;  align-items: center;color:#EEC7F1;margin:auto" >Aprendiendo-Quechua</h1>
                                    <br> 
                                    <i style="font-size:2vw;display: flex;  justify-content: center;  align-items: center;color:#7D1585 ;" class="fa">&#xf023;</i>
                                <br>     
                                <br>  
                                
                                                        
                                <form role="form-control" action="" method="post" >                                    
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" placeholder="Gmail@Example.com " name="correo"  required/>
                                        </div>
									    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input ID="txtPassword" type="password" class="form-control"  placeholder="Password"   name="contra"  required/>
                                            
                                            <span class="input-group-btn">
                                                <div class="input-group-append">
                                                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                                </div> 
                                            </span>
                                           
                                        </div> 
                                                                             						                          
                                        <input  style="font-size: 1vw;" type="submit"   class="btn btn-primary" value="Inisiar sesion" name="log">
                                     <a  style="font-size: 1vw;" class="btn btn-primary"  href="index.php?ruta=registrar" type= "submit" name="registrar">Registrarse</a>
                                     <a  style="font-size: 1vw;" class="btn btn-primary"  href="index.php?ruta=registrar" type= "submit" name="registrar">Recuperar contraseña</a>
                                </form>  
                                </div>
                        </div>                                                  
    </div>                     
</div>
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script> 
    
</body>
</html>

<?php
$ingreso = new AdminC();
$ingreso->inicioC();

?>





