<?php
session_start();
include "../conexion.php";
$re=mysql_query("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Apellido'=>$f['Apellido'],'Imagen'=>$f['Imagen']);
	}
	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: ../index.php");
	}else{
		header("Location: ../login.html?error=datos no validos");
	}
?>