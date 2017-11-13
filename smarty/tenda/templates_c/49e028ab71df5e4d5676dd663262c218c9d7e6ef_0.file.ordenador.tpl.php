<?php
/* Smarty version 3.1.31, created on 2017-10-31 16:07:48
  from "/home/vagrant/Code/MisProyectos/tenda/smarty/tenda/templates/ordenador.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f89fd4b62d69_81528167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e028ab71df5e4d5676dd663262c218c9d7e6ef' => 
    array (
      0 => '/home/vagrant/Code/MisProyectos/tenda/smarty/tenda/templates/ordenador.tpl',
      1 => 1478126404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f89fd4b62d69_81528167 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tarea 5 : Programación orientada a objetos en PHP -->
<!-- Tienda Web: ordenador.php -->
<!-- Nueva plantilla para presentar los datos de los ordenadores -->
<html>
	<head>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <title>Ordenador <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->cod;?>
</title>
	  <link href="tienda.css" rel="stylesheet" type="text/css">
	</head>

	<body class="pagproductos">

		<div id="contenedor" style="background-color: #df8;">
		  <div id="encabezado">
		    <h1><?php echo $_smarty_tpl->tpl_vars['ordenador']->value->nombre_corto;?>
</h1>
				<p><b>C&oacute;digo: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->cod;?>
</b></p>
		  </div>
		  <div class="ordenador">
				<h2>Caracter&iacute;sticas:</h2>
				<p><b>Procesador:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->procesador;?>
</p>
				<p><b>RAM:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->RAM;?>
 GB</p>
                                <p><b>Disco:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->disco;?>
 GB</p>
				<p><b>Tarjeta gr&aacute;fica:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->grafica;?>
</p>
				<p><b>Unidad &oacute;ptica:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->unidadoptica;?>
</p>
				<p><b>Sistema Operativo:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->SO;?>
</p>		
				<p><b>Otros:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->otros;?>
</p>
				<p><b>PVP:</b> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->PVP;?>
</p>
				<h2>Descripci&oacute;n:</h2>
				<p><?php echo $_smarty_tpl->tpl_vars['ordenador']->value->descripcion;?>
</p>
			</div>
  
		  <div id="pie" style="height: 25px">
				<form action="productos.php" method="post">
					<input type='submit' name='' value='Volver' class='izq boton' />
					<input type='hidden' name='cod' value='<?php echo $_smarty_tpl->tpl_vars['ordenador']->value->cod;?>
' />
					<input type='submit' name='enviar' value='Comprar' class='dch boton' />
				</form>
		  </div>
		</div>
	</body>
</html><?php }
}
