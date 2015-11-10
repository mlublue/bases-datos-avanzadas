<?php /* Smarty version 3.1.27, created on 2015-11-04 23:54:19
         compiled from "C:\xampp\htdocs\VistasBDA\templates\detalle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21970563a8c9b99d957_31835747%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '116fe53caafd6e27537aa6d1cd0ff1e8b2062e6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VistasBDA\\templates\\detalle.tpl',
      1 => 1446677601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21970563a8c9b99d957_31835747',
  'variables' => 
  array (
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563a8c9baa7396_67554187',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563a8c9baa7396_67554187')) {
function content_563a8c9baa7396_67554187 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21970563a8c9b99d957_31835747';
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	<title>Detalle Factura</title>
</head>
<body>
	<center>
		ID: <?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
 <br>
		RFC: <?php echo $_smarty_tpl->tpl_vars['f']->value->rfc;?>
 <br>
		Cliente: <?php echo $_smarty_tpl->tpl_vars['f']->value->cliente;?>
 <br>
		Desarrollador: <?php echo $_smarty_tpl->tpl_vars['f']->value->desarrollador;?>
 <br>
		Fecha: <?php echo $_smarty_tpl->tpl_vars['f']->value->fecha;?>
 <br>
	<a href="index.php">Regresar</a>
	</center>
</body>
</html><?php }
}
?>