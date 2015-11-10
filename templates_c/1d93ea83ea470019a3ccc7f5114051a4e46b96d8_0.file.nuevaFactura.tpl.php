<?php /* Smarty version 3.1.27, created on 2015-11-05 02:20:24
         compiled from "C:\xampp\htdocs\VistasBDA\templates\nuevaFactura.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26659563aaed8b1cb06_89626553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d93ea83ea470019a3ccc7f5114051a4e46b96d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VistasBDA\\templates\\nuevaFactura.tpl',
      1 => 1446678613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26659563aaed8b1cb06_89626553',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563aaed8c92093_29419695',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563aaed8c92093_29419695')) {
function content_563aaed8c92093_29419695 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26659563aaed8b1cb06_89626553';
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