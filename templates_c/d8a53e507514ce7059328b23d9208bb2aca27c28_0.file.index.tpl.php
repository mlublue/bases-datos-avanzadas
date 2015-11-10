<?php /* Smarty version 3.1.27, created on 2015-11-05 04:54:09
         compiled from "C:\xampp\htdocs\VistasBDA1\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:808563ad2e16c94b5_12596332%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a53e507514ce7059328b23d9208bb2aca27c28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VistasBDA1\\templates\\index.tpl',
      1 => 1446687024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808563ad2e16c94b5_12596332',
  'variables' => 
  array (
    'f' => 0,
    'fact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563ad2e177cfe7_19853386',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563ad2e177cfe7_19853386')) {
function content_563ad2e177cfe7_19853386 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '808563ad2e16c94b5_12596332';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body> 

	<div>
	<h1><font color="Green">Facturas</h1></font>
	<hr>
	<form action="#" method="GET" class="navbar-form navbar-left">
		<div class="input-group">
	      		<input type="text" class="form-control" name="b" placeholder="Buscar Factura">
	      		<span class="input-group-btn">
	        		<button class="btn btn-default" type="submit">
	        			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	        		</button>
	      		</span>
	    	</div>
	</form>
	<form action="nuevaFactura_smarty.php">
		<button type="submit" class="btn btn-primary">Nueva marca</button>
	</form>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>RFC</th>
			<th>Fecha</th>
		</tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['f']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fact'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fact']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fact']->value) {
$_smarty_tpl->tpl_vars['fact']->_loop = true;
$foreach_fact_Sav = $_smarty_tpl->tpl_vars['fact'];
?>
			<font color="Maroon">
			<tr>
				<td><font color="Maroon	"><?php echo $_smarty_tpl->tpl_vars['fact']->value->id;?>
</font></td>
				<td><a href="detalle_smarty.php?id=<?php echo $_smarty_tpl->tpl_vars['fact']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['fact']->value->rfc;?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['fact']->value->fecha;?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['fact'] = $foreach_fact_Sav;
}
?>		
		
	</table>
</div>
</body>
</html><?php }
}
?>