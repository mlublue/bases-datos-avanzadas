<?php /* Smarty version 3.1.27, created on 2015-11-10 03:14:39
         compiled from "C:\xampp\htdocs\VistasBDA1\templates\nuevaFactura.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:104975641530f0fdfc1_58704189%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1d416f43067585c130b33f858de5245b487cc1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VistasBDA1\\templates\\nuevaFactura.tpl',
      1 => 1446678613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104975641530f0fdfc1_58704189',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5641530f7d4155_16100827',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5641530f7d4155_16100827')) {
function content_5641530f7d4155_16100827 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '104975641530f0fdfc1_58704189';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="agregar.php" method="POST">
		<label>RFC</label>
		<input type="text" name="rfc"><br>
		<label>Cliente</label>
		<input type="text" name="cli"><br>
		<label>Desarrollador</label>
		<input type="text" name="des"><br>
		
		<button>Agregar</button>
	</form>
	<br>
	<br>
	<a href="index.php">Inicio</a>
</body>
</html><?php }
}
?>