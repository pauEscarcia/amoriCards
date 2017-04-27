<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Análisis de Software</title>
        <meta name="description" content="Formulario de análisis de software epicQueenZac" />
        <meta name="keywords" content="análisis, software, epicqueen" />
        <meta name="author" content="Pau Escarcia" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<script src="js/validar.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/bg5.jpg) repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
			<header>

				<IMG SRC="images/logo.png"  ALT="EpicQueen">
				<h1><strong>Formulario de Análisis de Software </strong>en Epic Queen</h1>
				<br></br>
				<p>Este formulario esta diseñado para determinar cual es el mejor </p>
				<p> software de desarrollo utilizado en niñ@s de 7 a 12 años en Epic Queen Zacatecas </p>
			</header>
			
			<section class="main">
				<form id="miform" class="form-2" action="formulario2.php" method="post" >
				    <h1>Datos del mentor</h1><br>
				    <p>
				        <label>Nombre</label>
				        <input type="text" name="nombre" placeholder="Nombre"  id= "txtNom" required>	<p id="name" class="valida"></p>
				        <br>
				    </p>
				    <p>
				        <label for="formulario1">Profesión</label>
				        <input type="text" name='profesion' placeholder="Profesión" id="txtPro" required> <p id="pro" class="valida"></p>
				        <br>
				    </p>
				    <p>
				        <label for="formulario1">Edad</label>
				        <input type="text" name='Edad' placeholder="Edad" id="txtEdad"required> <p id="edad" class="valida"></p>
				        <br>
				    </p>

				    <p>
				    	<label for="formulario1">Género</label>
				    	<input type="radio" name="genero" value="femenino" id="radFem"> Femenino<br>
				    	<input type="radio" name="genero" value="masculino" id="radMas"> Masculino<br> 
				    	<p id="gen" class="valida"></p>
				    	<br>
					</p>

					<p>
				    	<label for="formulario1">Selecciona 2 o más tecnologías en donde estuviste: </label>
				    	<input type="checkbox" name="check_list[]" value="SketchUp">SketchUp<br>
				    	<IMG SRC="images/sket.png"  ALT="EpicQueen"><br>

				   
				    	<input type="checkbox" name="check_list[]" value="Software Kids">Software Kids<br>
				    	<IMG SRC="images/sw.png"  ALT="EpicQueen"><br>

				    	<input type="checkbox" name="check_list[]" value="Scratch">Scratch <br>
				    	<IMG SRC="images/sc.png"  ALT="EpicQueen"><br>

				    	<input type="checkbox" name="check_list[]" value="Arduino">Arduino<br>
				    	<IMG SRC="images/ar.png"  ALT="EpicQueen"><br>

				    	<input type="checkbox" name="check_list[]" value="Balsamic">Balsamic<br>
				    	<IMG SRC="images/ba.png"  ALT="EpicQueen"><br>


				    	<input type="checkbox" name="check_list[]" value="Kids Ruby">Kids Ruby<br><br>
				    	<IMG SRC="images/kr.png"  ALT="EpicQueen"><br><br>	

				    	<p id="code" class="valida"></p>

				    	<input type="button" value="Enviar" id="enviar" onclick="validar()"/> 
				    	


				        <!--<input type="submit" name="submit" Value="Siguiente" onclick="validar()" />	-->
				        <br></br>  <br></br> 
				        <?php include 'checkbox_value.php';?>   
					</p>
				   
				</form>​
			</section>
			
        </div>










    </body>
</html>