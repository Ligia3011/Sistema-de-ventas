<?php
	$usuario=array("Ligia","Abby","Carlos");
	$pass=array(123,456,789);

	$estado=false;

	$nombre=$_POST['nombre'];
	$password=$_POST['pass'];

	$tam=count($usuario);

	for($x=0; $x<$tam; $x++)
	{
	 if($usuario[$x]==$nombre && $pass[$x]==$password)
	 {
	 $estado=true;
	 }
	}
	if($estado)
	{
	header("location:Venta.php");
	}
	else 
	{
	header("location:index.html");
	}

?>