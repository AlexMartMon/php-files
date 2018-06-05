<html>
	<head>
		<title>Problema</title>
	</head>
	<body>
		<?php
			//Escritura de un achivo
			/*
			$ar=fopen("datos.txt","a") or
			die("Problemas en la creacion");
			fputs($ar,$_POST['nombre']);
			fputs($ar,"\t");
			fputs($ar,$_POST['comentarios']);
			fputs($ar,"\t");
			fputs($ar,"--------------------------------------------------------");
			fputs($ar,"\n");
			fclose($ar);
			echo "Los datos se cargaron correctamente.";
			*/
			
			//Lectura de un archivo
			/*
			$ar=fopen("datos.txt","r") or
			die("No se pudo abrir el archivo");
			while (!feof($ar))
			{
			  $linea=fgets($ar);
			  $lineasalto=nl2br($linea);
			  echo $lineasalto;
			}
			fclose($ar);
			*/
	  ?>
	</body>
</html>