<!DOCTYPE html>
<html>
	<head>
		<title>Registro de Usuarios</title>
		<link href="css/estilo_registro.css" type="text/css" rel="stylesheet">
		<meta property="og:url"           content="https://www.3paortizloyola.com/index.php" />
		  <meta property="og:type"          content="website" />
		  <meta property="og:title"         content="Your Website Title" />
		  <meta property="og:description"   content="Your description" />
		  <meta property="og:image"         content="https://www.3paortizloyola.com/path/image.jpg" />
		<script src="js/jquery.validate.js"></script>
		<script src="js/jquery-3.3.1.js"></script>
		<script>
			$("#formulario").validate();
		</script>
	</head>
	<body>
		<h1>Registro al Curso</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Registro</h2>
	<form action="alta.php" method="post" id="formulario">
		<label>Nombre</label><input type="text" name="nombre" required/><br/>
		<label>Apellido Paterno</label><input type="text" name="appat" required/><br/>
		<label>Apellido Materno</label><input type="text" name="apmat"/><br/>
		<label>Telefono</label><input type="text" name="tel" required/><br/>
		<label>Correo</label><input type="text" name="correo" required/><br/>
		<input type="submit" value="Enviar">
	</form>
<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your like button code -->
  <div class="fb-like" 
    data-href="https://www.3paortizloyola.com/index.php" 
    data-layout="standard" 
    data-action="like" 
    data-show-faces="true">
  </div>



</html>
	
