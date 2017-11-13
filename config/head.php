<?php
ini_set('display_errors', 'On');

require_once("vendor/autoload.php");
require_once("vendor/smarty/smarty/libs/Smarty.class.php");

// Cargamos la librería de Smarty
// He puesto una dirección relativa para poder incluir smarty en el directorio
// del proyecto y poder comprimirlo todo en un solo fichero zip
$smarty = new Smarty;
$smarty->template_dir = 'smarty/tenda/templates/';
$smarty->compile_dir = 'smarty/tenda/templates_c/';
$smarty->config_dir = 'smarty/tenda/configs/';
$smarty->cache_dir = 'smarty/tenda/cache/';

