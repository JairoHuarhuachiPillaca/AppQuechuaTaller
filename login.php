<?php
    include("php/dbconnect.php");

    $error = '';
    if(isset($_POST['login']))
    {

    $username =  mysqli_real_escape_string($conn,trim($_POST['correo']));
    $password =  mysqli_real_escape_string($conn,$_POST['contra']);

    if($username=='' || $password=='')
    {
    $error='All fields are required';
    }

    $sql = "select * from usuarios where gmail='".$username."' ";
    
    $q = $conn->query($sql);
    
    if($q->num_rows==1)
    {
    $res = $q->fetch_assoc();
    $_SESSION['r_idUsuario']=$res['idUsuario'];
    $_SESSION['r_nombre']=$res['nombre'];
    $_SESSION['r_apellido']=$res['apellido'];
    $_SESSION['r_email']=$res['gmail'];
    $_SESSION['r_tel']=$res['telefono'];
    $_SESSION['r_fn']=$res['FechaNacimiento'];
    $_SESSION['r_contraseña']=$res['clave'];
    $_SESSION['r_id_rol']=$res['idRol'];
    $_SESSION['r_logo']=$res['logo_url'];
    if(password_verify($password,$res['clave']))
    {
        switch ($res['idRol']) {
            case 1:
                header('location:admin.php');
            break;
            
            case 2:
                header('location:index.php');
            break;
            
            default:
        }
        
        
    }
    
    
       
    }
    ?> <script >
        alert('Datos incorrectos');
        
    </script> <?php
    

    }
    if(isset($_POST['registrar'])){
        echo '<script type="text/javascript">window.location="signup.php"; </script>';

    }
    if(isset($_POST['recuperar'])){
        echo '<script type="text/javascript">window.location="recuperar.php"; </script>';

    }

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

    <link href="css/botts.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/portada.css">
<style >
    @font-face {
  font-family: Poppins;
  src: url("fonts/Poppins-Regular.ttf");
  
}

html * {
  font-family: "Poppins", sans-serif;
 
}
.myhead{
 margin-top: 15px;
 margin-bottom: 80px;
 margin-right:60px;
 margin-left:65px;
 color:#FFFFFF;

 position: absolute;
  
  width: 50%;
  text-align: center;
  font-size: 15px;
 
}
body {
        position: relative;
        text-align: center;
        height: 100px;
        
        }
.img-circle1{
    margin-top: -10px;
    top: 10%;
    float:left;
    width: 10%;
    border-radius: 50%;
}
.img-circle2{
    margin-top: -7px;
    top: 30%;
    float:right;
    width: 13%;
    border-radius: 50%;
    
}


</style>

</head>
<body >
    <div class="container-portada">
    
    <div class="container my-5 d-flex justify-content-center" >
                    <div class="col-sm-6" >
                        <div  class="form" style="background-color:#D476FA ;box-shadow: 7px 10px #ACB6B7;opacity: 0.91 ;  box-sizing: border-box;border-radius: 10px; padding: 2px 1px 0 0 ; top: 50%;  left: 50%;margin-top:1% ;padding :25px">                        
                                <div >
                                    <img style="float:left;margin-top: auto;" src="img/un.png" class="img-circle1"  width="30" class="my-4">
                                    <img style="float:right;margin-top: auto;" src="img/xd.jpg" class="img-circle2" width="45" class="my-4">
                                   
                                    <h1 style="font-size: 1.9vw;  justify-content: center;  align-items: center;color:#EEC7F1;margin:auto" >Aprendiendo Quechua Chanka</h1>
                                    <br> 
                                    <i style="font-size:2vw;display: flex;  justify-content: center;  align-items: center;color:#7D1585 ;" class="fa">&#xf023;</i>
                                <br>     
                                
                                
                                                        
                                <form role="form-control"  method="post" >                                    
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
                                        <button style="font-size: 1vw;" class="btn btn-primary"  type= "submit" name="login">Iniciar sesión</button>                                     						                          
                                        <button style="font-size: 1vw;" class="btn btn-primary"  type= "submit" name="registrar">Registrarse</button>  
                                        <br>
                                        <a style="font-size: 1vw;color:#FFFFFF ;" href="recuperar.php" type="submit" value=>Olvidaste tu contraseña?</a>  
                                    
                                </form>  
                                </div>
                        </div>    
            </div>
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
