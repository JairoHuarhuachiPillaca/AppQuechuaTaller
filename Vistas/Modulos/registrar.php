<?php
$xd = new adminC();
$xd->RegistraC()
?>

<!DOCTYPE html>
<body >
<div class="container my-5 d-flex justify-content-center">
        <div class="col-sm-5" >
            
                <div class="card-header" style="background-color:#D476FA  ;box-shadow: 7px 10px #ACB6B7;opacity: 0.91 ;  box-sizing: border-box;border-radius: 10px; padding: 2px 1px 0 0 ; top: 30%;  left: 50%;margin-top:-1% ;padding :25px">
                <img style="float:left;margin-top: auto;" src="img/un.png" class="img-circle" width="50" class="my-4">
                <img style="float:right;margin-top: auto;" src="img/x.jpg" class="img-circle" width="60" class="my-4" >
                <h1  style="font-size:  1.4vw;color:#EEC7F1;display: flex;  justify-content: center;  align-items: center;"  >Aprendiendo-Quechua-Chanka </h1>
                <br>
                <h3 style="color:#FFFFFF;display: flex;  justify-content: center;  align-items: center;" >Registrarse</h3>
                
                <div class="card-body" >
                    <form  method="post" id="formulario">
                        <div class="form-group input-group"> 
                          
                            <span class="fa fa-user-circle-o"></span>                          
                            <input type="text" class="form-control" id="nombre" name="nombres" placeholder="Nombre*" >
                            <div></div>
                        </div>
                        <div class="form-group input-group">     
                            <span class="fa fa-address-card"></i></span>                        
                            <input type="text" class="form-control" id="apellidos" name="apellido" placeholder="Apellidos*" >
                            <div></div>
                        </div>
                        <div class="form-group input-group">  
                            <span class="fa fa-envelope-o "></span>                           
                            <input type="email" class="form-control" id="email" name="correo" placeholder="Enter email">
                            <div></div>
                        </div>
                        <div class="form-group input-group">
                            <span class="fa fa-calculator"></span>                             
                            <input  type="number" class="form-control" id="phone" name="tel" placeholder="Enter phone">
                            <div></div>
                        </div>
                        <div class="form-group input-group">
                            <span class="fa fa-calendar"></span>
                            <input type="date" class="form-control"  name="fn" value="<?php echo trim($dataUsuario[0]['fechaNacimiento']); ?>"  >
                        </div>
                        <div class="form-group input-group"> 
                            <span class="fa fa-lock"></span>                            
                            <input  type="password" class="form-control" id="Contraseña" name="contraseñ" placeholder="Enter password">
                            <div class="input-group-append">
                            <button  class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                            <div></div>
                          
                                                 
                          
                        </div>
                        
                    
                        <div class="form-group input-group"> 
                            <span class="fa fa-lock"></span>                            
                            <input type="password" class="form-control" id="repassword" placeholder="Enter password again">
                            <div></div>
                        </div>
                   
                        <button class="btn btn-primary" id="enviar"  type="submit" name="register" >Registrarse</button>
                    </form>
                </div>
                
            </div>
        </div>
</div>

<script>

var verificar=false;
const form = document.querySelector('#formulario');
const username = document.querySelector('#nombre');
const username1 = document.querySelector('#apellidos');
const email = document.querySelector('#email');
const Contraseña = document.querySelector('#Contraseña');
const repassword = document.querySelector('#repassword');

function error(input, message) {
    input.className = 'form-control is-invalid';
    const div = input.nextElementSibling;
    div.innerText = message;
    div.className = 'invalid-feedback';
}

function success(input) {
    input.className = 'form-control is-valid';
    
}

function checkEmail(input) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
    if(re.test(input.value)) {
        success(input);
    } else {
        error(input, 'Dirección de correo electrónico no válida.');
    }
    verificar=true;
    return false;
}

function checkRequired(inputs) {
    inputs.forEach(function(input) {
        if(input.value === '') {
            error(input, `${input.id} is required.`);
        } else {
            success(input);
        }
    });  
    verificar=true;
    return false;
}

function checkLength(input, min, max) {
    if (input.value.length < min) {
        error(input, `Campo ${input.id} admite por lo menos ${min} caracteres.`);
    }else if (input.value.length > max) {
        error(input, `Campo ${input.id} admite un máximo de ${max} caracteres.`);
    }else {
        success(input);
    }
    verificar=true;
    return false;
     
}
function checkLetra(input) {
    var xd = /^[a-zA-Z ]+$/;
    
    if (xd.test(input.value) ) {
        success(input);
    }else if(input.value.length<1){
      error(input, `Campo ${input.id} vacio`);
    }else{
      error(input, `Campo ${input.id} solo admite letras`);
    }
    verificar=true;
    return false;
}

function checkPasswords(input1,input2) {
    if(input1.value !== input2.value) {
        error(input2, 'Las contraseñas no coinciden.');
        verificar=false;
    }else{
        verificar=true;
    }
    
    return verificar;
}

function checkPhone(input) {
    var exp = /^\d{9}$/;   
    if(!exp.test(input.value)) {
        error(input, "El campo de teléfono debe tener 9 caracteres.");
        verificar=false;
    }else{
        verificar=true;
    }
    return verificar;
}



function validar() {

checkRequired([username,username1,email,Contraseña ,repassword,phone]);
checkEmail(email);
checkLetra(username);
checkLetra(username1);
checkLength(Contraseña,5,15);
checkPasswords(Contraseña,repassword);
checkPhone(phone);
console.log(checkPhone(phone));
console.log(checkPasswords(Contraseña,repassword));

/*console.log(verificar); 
console.log(verificar);
if(verificar==false){    
	    document.form.submit();        
}else{
    form.addEventListener('submit', function(e) {
            e.preventDefault();
        });
}*/

}

function validarformulario(){

    form.addEventListener('submit', function(e) {
        
        validar();
        if(checkPhone(phone)==true&&checkPasswords(Contraseña,repassword)==true){
            form.submit();
        }else{
            e.preventDefault();
        }
    });
    
}
window.onload=function(){
    
    var botonEnviar=document.getElementById("enviar");
    botonEnviar.onclick=validarformulario;	
    
};








function mostrarPassword(){
		var cambio = document.getElementById("Contraseña");
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



function mostrarPassword1(){
		var cambio = document.getElementById("repassword");
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
	$('#ShowPassword1').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});

</script>

 



</script>

 
</script>
</body>
</html>
