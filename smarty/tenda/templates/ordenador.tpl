<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tarea 5 : Programación orientada a objetos en PHP -->
<!-- Tienda Web: ordenador.php -->
<!-- Nueva plantilla para presentar los datos de los ordenadores -->
<html>
	<head>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <title>Ordenador {$ordenador->cod}</title>
	  <link href="tienda.css" rel="stylesheet" type="text/css">
	</head>

	<body class="pagproductos">

		<div id="contenedor" style="background-color: #df8;">
		  <div id="encabezado">
		    <h1>{$ordenador->nombre_corto}</h1>
				<p><b>C&oacute;digo: {$ordenador->cod}</b></p>
		  </div>
		  <div class="ordenador">
				<h2>Caracter&iacute;sticas:</h2>
				<p><b>Procesador:</b> {$ordenador->procesador}</p>
				<p><b>RAM:</b> {$ordenador->RAM} GB</p>
                                <p><b>Disco:</b> {$ordenador->disco} GB</p>
				<p><b>Tarjeta gr&aacute;fica:</b> {$ordenador->grafica}</p>
				<p><b>Unidad &oacute;ptica:</b> {$ordenador->unidadoptica}</p>
				<p><b>Sistema Operativo:</b> {$ordenador->SO}</p>		
				<p><b>Otros:</b> {$ordenador->otros}</p>
				<p><b>PVP:</b> {$ordenador->PVP}</p>
				<h2>Descripci&oacute;n:</h2>
				<p>{$ordenador->descripcion}</p>
			</div>
  
		  <div id="pie" style="height: 25px">
				<form action="productos.php" method="post">
					<input type='submit' name='' value='Volver' class='izq boton' />
					<input type='hidden' name='cod' value='{$ordenador->cod}' />
					<input type='submit' name='enviar' value='Comprar' class='dch boton' />
				</form>
		  </div>
		</div>
	</body>
</html>