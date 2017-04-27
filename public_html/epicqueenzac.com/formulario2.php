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
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images/bg6.jpg) repeat center top;
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
				<form class="form-2" action="apgform1.7.php" method="post">
				    <h1>Comparación de code partys</h1>
				        <?php include 'checkbox_value.php';?>   
					</p>

				

				    <p>
				    	<label > ¿Qué tecnología te gustaría que se usará en Epic Queen?</label>
				        <input type="text" name='tecnología' placeholder="tecnologia" required> 
				     	
				    </p>    

				      <p>
				        <input type="submit" name="submit" Value="Siguiente"/>	
				    </p>    
				   
				</form>​
			</section>
			
        </div>
    </body>
</html>