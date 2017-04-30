<?php 
  include '../conexion.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Taller de aplicaciones web progresivas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript"  href="./js/scripts.js"></script>
  </head>
  <body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">TuLoc</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="/">Inicio</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">TuLoc</span>
        <nav class="mdl-navigation">
        <img src="../imagenes/cobo2.png" id="logos">
          <a class="mdl-navigation__link" href="../index.php">Inicio</a>
          <a class="mdl-navigation__link" href="../estadisticas.html">Estadisticas</a>

      
          <a class="mdl-navigation__link" href="">Cerrar sesión</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
          <div class="container">
            <h1>Cambiando el Juego</h1>



           
          </div>

          <div class="indigo">
            <div class="container">
              <div class="demo-card mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                  <h2 class="mdl-card__title-text">TuLoc</h2>
                </div>
                <div> <img src="../imagenes/cobo2.png" id="logos"></div>
                <div class="mdl-card__supporting-text">
               
	<section>
	<form id="formulario" method="post" action="./login/crear.php">
		
		<?php  
if(isset($_POST['aceptar'])){
		$nombre=$_POST['Nombre'];
		$apellido=$_POST['Apellido'];
		$usuario=$_POST['Usuario'];
		$password=$_POST['Password'];
		$cpassword=$_POST['cPassword'];
		$imagen='usuario.png';
	
		if ($password==$cpassword) {
         
         	if ($nombre!='') {
         		if ($apellido!='') {
         			if ($usuario!='') {
         			
         		if ($password!='') {

         			
         		
         			
         		
         	
         	
         	$sql="INSERT INTO `usuarios` (`Nombre`, `Apellido`, `Usuario`, `Password`, `Imagen`) VALUES ('".$nombre."', '".$apellido."', '".$usuario."', '".$password."', '".$imagen."');";
					mysql_query($sql);
					echo "Tu usuario fue creado<br>
					<a href='../login.php'>iniciar sesion</a>
					";
				}else{
					echo "no pusiste tu contraseña";
						echo "<a href='../registrar.php'>regresar al registro</a>";
				}
	}else{
			echo "no pusiste tu usuario";
						echo "<a href='../registrar.php'>regresar al registro</a>";
	}

				}
					else{
						echo "no pusiste tu apellido";
						echo "<a href='../registrar.php'>regresar al registro</a>";
					}

				}
					else{
						echo "no pusiste tu nombre";
						echo "<a href='../registrar.php'>regresar al registro</a>";
					}
         	
        
			
		}else{
			echo "Tu contraseña no coincide";
			echo "<a href='../registrar.php'>regresar al registro</a>";
		}
	}else{
		echo "porque estas aqui?";
	}
		?>
	</form>
	</section>
 
                </div>
              </div>
           
             



            </div>

          </div>

        </div>
      </main>
    </div>





  </body>
</html>
