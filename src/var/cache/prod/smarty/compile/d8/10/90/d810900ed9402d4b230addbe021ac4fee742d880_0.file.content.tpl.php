<?php
/* Smarty version 3.1.43, created on 2022-12-19 23:03:06
  from '/var/www/html/admin9f46/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a0df9aa77614_05883218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd810900ed9402d4b230addbe021ac4fee742d880' => 
    array (
      0 => '/var/www/html/admin9f46/themes/new-theme/template/content.tpl',
      1 => 1671486784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0df9aa77614_05883218 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}