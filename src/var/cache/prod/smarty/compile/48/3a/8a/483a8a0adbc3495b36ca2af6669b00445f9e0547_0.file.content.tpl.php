<?php
/* Smarty version 3.1.43, created on 2022-12-20 22:33:40
  from '/var/www/html/admin9f46/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a22a34bb7cf0_82055183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483a8a0adbc3495b36ca2af6669b00445f9e0547' => 
    array (
      0 => '/var/www/html/admin9f46/themes/default/template/content.tpl',
      1 => 1671564740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a22a34bb7cf0_82055183 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
