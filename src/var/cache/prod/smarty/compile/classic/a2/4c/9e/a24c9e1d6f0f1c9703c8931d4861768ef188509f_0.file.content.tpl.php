<?php
/* Smarty version 3.1.43, created on 2022-12-20 23:20:44
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a2353cab51b8_67467129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a24c9e1d6f0f1c9703c8931d4861768ef188509f' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1671564741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_63a2353cab51b8_67467129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
