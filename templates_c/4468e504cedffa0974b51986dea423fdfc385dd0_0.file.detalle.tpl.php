<?php /* Smarty version 3.1.27, created on 2015-11-05 04:55:33
         compiled from "C:\xampp\htdocs\VistasBDA1\templates\detalle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30414563ad335751421_25314681%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4468e504cedffa0974b51986dea423fdfc385dd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VistasBDA1\\templates\\detalle.tpl',
      1 => 1446677601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30414563ad335751421_25314681',
  'variables' => 
  array (
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563ad33580cc54_04434983',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563ad33580cc54_04434983')) {
function content_563ad33580cc54_04434983 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30414563ad335751421_25314681';
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