	<?php
		require_once ("php/dbconnect.php");
		$usid=$_SESSION['r_idUsuario'];
		$query_empresa=mysqli_query($conn,"select nombre,apellido,gmail,telefono,logo_url,FechaNacimiento,YEAR(CURDATE())-YEAR(FechaNacimiento) as 'edad'  from usuarios where idUsuario=$usid");
		$row=mysqli_fetch_array($query_empresa);
	
	if(isset($_POST['edit']))
    {
        $nombrep = mysqli_real_escape_string($conn, $_POST['nombrep']);
        $apellidop = mysqli_real_escape_string($conn, $_POST['apellidop']);
        $telp = mysqli_real_escape_string($conn, $_POST['telp']);
        $datep = mysqli_real_escape_string($conn, $_POST['datep']);
		$emailp = mysqli_real_escape_string($conn, $_POST['emailp']);
		$usid=$_SESSION['r_idUsuario'];
    
        $query = "UPDATE usuarios SET nombre='$nombrep',apellido='$apellidop',telefono='$telp',FechaNacimiento='$datep',gmail='$emailp' WHERE idUsuario='$usid'";
        
        $result = $conn->query($query);
        if (!$result) die ("fallo edit");
        
        echo '<script type="text/javascript">alert("Perfil actualizado");window.location="perfil.php"; </script>';
        $conn->close();
    }
	?>

   
	
    
	<link rel="stylesheet" type="text/css" href="css/fets.css">
    <link rel="stylesheet" type="text/css" href="css/botts.css">
	<!DOCTYPE html>
	<html lang="en">
	<head>

		<?php include("php/header.php");?>
	<br><br>
	<br>
	<style>
    .img-circle{
    margin-top: 10px;
    width: 50%;
    border-radius: 50%;
    
    }
        </style>
	</head>
	<body>
		 
		<div class="container">
		<div class="container my-5 d-flex justify-content-center">
		<form method="post" >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
	
	
			<div class="panel panel-info">
				
				<div class="panel-body">
				<div class="row">
				
					<div class="col-md-3 col-lg-3 " align="center"> 
					<div id="load_img" >
						<img class="img-circle"  src="<?php echo $row['logo_url'];?>" alt="Logo">
						
					</div>
					<br>				
						<div class="row">
							<div class="createpostbuttons">
								<label align="center">
									<img src="img/cargar.jpg">Subir Foto
									<input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" onchange="upload_images();">
									
								</label>
							</div>
							
							
						</div>
					</div>
					<div class=" col-md-9 col-lg-9 "> 
					<table class="table table-condensed">
						<tbody>
						<tr>
							<td class='col-md-3'>Nombre:</td>
							
							<td><input type="text" class="form-control input-sm" name="nombrep" value="<?php echo $row['nombre']?>" required></td>
						</tr>
						<tr>	
							<td>Apellidos:</td>
							<td><input type="text" class="form-control input-sm" name="apellidop" value="<?php echo $row['apellido']?>" required></td>
						</tr>
						<tr>
							<td>Telefono:</td>
							<td><input type="text" class="form-control input-sm" name="telp" value="<?php echo $row['telefono']?>" ></td>
						</tr>
						<tr>
							<td>Fecha de Nacimiento:</td>
							<td><input type="date" class="form-control input-sm" name="datep" value="<?php echo $row['FechaNacimiento']?>" ></td>
						</tr>	
						<tr>
							<td>Años:</td>
							<td><a ><?=$row['edad']?> años</td>
							
						</tr>
						
						<tr>
							<td>Correo electrónico:</td>
							<td><input type="email" class="form-control input-sm" name="emailp" value="<?php echo $row['gmail']?>" ></td>
						</tr>				
																		
						</tbody>
					</table>					
					</div>
					
				</div>
				</div>
					<div class="panel-footer text-center">											
					<button type="submit" class="btn btn-sm btn-success" name="edit"><i class="glyphicon glyphicon-refresh"></i>Editar Perfil</button>						
					</div>
				</div>
			</div>
			</form>
		</div>

		
		
	</body>
	</html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script>
			function upload_images(){
					
					var inputFileImage = document.getElementById("imagefile");
					var file = inputFileImage.files[0];
					if( (typeof file === "object") && (file !== null) )
					{
						$("#load_img").text('Cargando...');	
						var data = new FormData();
						data.append('imagefile',file);
						
						
						$.ajax({
							url: "ajax/imagen_ajax.php",        // Url to which the request is send
							type: "POST",             // Type of request to be send, called as method
							data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
							contentType: false,       // The content type used when sending data to the server.
							cache: false,             // To unable request pages to be cached
							processData:false,        // To send DOMDocument or non processed data file it is set to false
							success: function(data)   // A function to be called if request succeeds
							{
								$("#load_img").html(data);
								
							}
						});	
					}
					
					
				}
		</script>

