<?php
/* Smarty version 3.1.43, created on 2022-12-20 23:23:51
  from '/var/www/html/admin9f46/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a235f70d0eb8_56711758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a6e2067694e69b6049860b79f6578fa58493883' => 
    array (
      0 => '/var/www/html/admin9f46/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1671564740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a235f70d0eb8_56711758 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
