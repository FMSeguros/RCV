<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('polizas')){
	mkdir('polizas',0777,true);
	if(file_exists('polizas')){
		if(move_uploaded_file($guardado, 'polizas/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'polizas/'.$nombre)){
		//echo "Archivo guardado con exito";
		echo "
    <head>
    <script src=' https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js '></script>
    <link href=' https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css ' rel='hoja de estilo'> 
    </head>
    <body>
    <script>

    Swal.fire({
      title: 'Archivo guardado con exito',  text: 'FM Seguros', icon: 'success', confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Ok',
      allowOutsideClick: false
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          
          window:location.href='index.php'
        });
      } 
    });
             </script> 
    </body>
             "; 
	}else{
		echo "
		<head>
		<script src=' https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js '></script>
		<link href=' https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css ' rel='hoja de estilo'> 
		</head>
		<body>
		<script>
	
		Swal.fire({
		  title: 'Oops...El Archivo no se pudo guardar',  text: 'Por favor intente de nuevo', icon: 'error', confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Ok',
		  allowOutsideClick: false
		}).then((result) => {
		  if (result.isConfirmed) {
			Swal.fire({
			  
			  window:location.href='index.php'
			});
		  } 
		});
				 </script> 
		</body>
				 ";
	}
}

?>