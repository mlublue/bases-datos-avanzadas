<?php /* Smarty version 3.1.27, created on 2015-11-05 02:23:09
         compiled from "C:\xampp\htdocs\VistasBDA\templates\agregar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31902563aaf7d81fe16_09215895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d11fb87527dfe26745d8d483209ec673b287ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VistasBDA\\templates\\agregar.tpl',
      1 => 1446686583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31902563aaf7d81fe16_09215895',
  'variables' => 
  array (
    'r' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563aaf7d9e1b12_60796165',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563aaf7d9e1b12_60796165')) {
function content_563aaf7d9e1b12_60796165 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31902563aaf7d81fe16_09215895';
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
		<?php if ($_smarty_tpl->tpl_vars['r']->value == true) {?>
			Se insertó correctamente <br>
			ID: <?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
 <br>
			RFC: <?php echo $_smarty_tpl->tpl_vars['f']->value->rfc;?>
 <br>
			Fecha: <?php echo $_smarty_tpl->tpl_vars['f']->value->fecha;?>
 <br>
			Cliente:<?php echo $_smarty_tpl->tpl_vars['f']->value->cliente;?>
 <br>
			Desarrollador: <?php echo $_smarty_tpl->tpl_vars['f']->value->desarrollador;?>
 <br>
		<?php } else { ?>
			Error
		<?php }?>
	<br>
	<br>
	<a href="index.php">Inicio</a>
	</center>
</body>
</html><?php }
}
?>