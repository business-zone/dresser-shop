<?php
/* Smarty version 3.1.43, created on 2022-12-21 03:23:07
  from '/var/www/html/admin9f46/themes/default/template/helpers/list/list_action_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a26e0b7fa0a3_58386178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7c873a58f75c85098bf37eb2ac25b4536749db7' => 
    array (
      0 => '/var/www/html/admin9f46/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1671588392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a26e0b7fa0a3_58386178 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" >
	<i class="icon-search-plus"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
