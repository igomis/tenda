<?php
/* Smarty version 3.1.30, created on 2016-11-03 13:49:01
  from "/home/batoi/html/tenda/smarty/tenda/templates/listaproductos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b323d7a2250_07327785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160de5f8ef382f908c8eb24c49d69431816933b7' => 
    array (
      0 => '/home/batoi/html/tenda/smarty/tenda/templates/listaproductos.tpl',
      1 => 1477867295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581b323d7a2250_07327785 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <p><form id='<?php echo $_smarty_tpl->tpl_vars['producto']->value->cod;?>
' action='productos.php' method='post'>
      <input type='hidden' name='cod' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->cod;?>
'/>
      <input type='submit' name='enviar' class='boton' value='Añadir'/>
      
      <?php if ($_smarty_tpl->tpl_vars['producto']->value->familia != "ORDENA") {?>
        
        <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_corto;?>

      <?php } else { ?>
        
        <a href="ordenador.php?codigo=<?php echo $_smarty_tpl->tpl_vars['producto']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_corto;?>
</a>
      <?php }?>
      : <?php echo $_smarty_tpl->tpl_vars['producto']->value->PVP;?>
 euros.</form></p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
