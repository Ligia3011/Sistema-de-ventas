<?php
	$usuario=array("Ligia","Abby");
	$pass=array(123,456);

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
	echo "user";
	}
	else 
	{
		echo "no user";
	}

?>