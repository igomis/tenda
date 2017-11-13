<?php
namespace modelo;
Use \Smarty;
include_once 'config/head.php';

// Recuperamos la información de la sesión
session_start();

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) 
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");


$cesta = \modelo\CestaCompra::carga_cesta();


// Comprobamos si se ha enviado el formulario de vaciar la cesta
if (isset($_POST['vaciar'])) {
    unset($_SESSION['cesta']);
    echo 'Vaciar cesta';
    $cesta = new CestaCompra();
}

// Comprobamos si se quiere añadir un producto a la cesta
if (isset($_POST['enviar'])) {
    $cesta->nuevo_articulo($_POST['cod']);
    $cesta->guarda_cesta();
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('productos', \modelo\Producto::obtieneProductos());
$smarty->assign('productoscesta', $cesta->get_productos());

// Mostramos la plantilla
$smarty->display('productos.tpl');     
?>