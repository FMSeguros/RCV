<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seguros Auto Plus</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!--Sweetalert-->
   <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js "></script>
  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css " rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>
<body>
	 
	

<!-- ======= Contact Section ======= -->
<div class="container d-flex align-items-center justify-content-between">
		<div class="logo">
		<a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
		</div>
		<div>
			<H2>RCV AUTO PLUS</h2>
		</div>
</div>
<section id="contact" class="contact section-bg">
    <div class="container">
<h2>Subir poliza en formato <b>pdf</b></h2>
	<div class="form-group">
		<form action="sube.php" method="post" enctype="multipart/form-data">
			<input type="file" name="archivo" class="form-control" required>
			<br><br>
			<!--<button>Subir Archivo</button>-->
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</section>
<!--</div>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html