<?php 
$empleados = new adminC();
$respuesta = $empleados-> MostrarDatosC(); ?>


<?php
		foreach($respuesta as $key => $value ){
		?>               
		
<?php
		}
		?>
<nav class="bg-primary">Bienvenido Usuario <?=$value['nombre']?></nav>