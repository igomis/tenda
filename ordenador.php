<?php
namespace modelo;
use \smarty;
require_once('config/head.php');
/*
 Nuevo fichero para crear la clase ordenador y llamar a la plantilla que mostrará sus datos
*/
// Recuperamos la información de la sesión
session_start();

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) 
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");


// Comprobamos si se ha enviado el formulario de vaciar la cesta

if (isset($_GET['codigo'])) {
	$smarty->assign('correcto',true);
	//$miordenador = DB::obtieneOrdenador($_GET['codigo']);
	$ordenador=new Ordenador();
        $ordenador->selecciona($_GET['codigo']);

	$smarty->assign('ordenador',$ordenador);
	$smarty->assign('usuario', $_SESSION['usuario']);

}else{
	$smarty->assign('correcto',false);
}

// Mostramos la plantilla
$smarty->display('ordenador.tpl');     
?>