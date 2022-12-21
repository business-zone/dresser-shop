<?php
/* Smarty version 3.1.43, created on 2022-12-21 04:03:33
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a2778554b329_64683653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf11b487e9f57d977d9535e2917b51e003affa0' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/categories-tree.tpl',
      1 => 1671588397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2778554b329_64683653 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories used for this template:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <?php if (trim($_smarty_tpl->tpl_vars['categories_tree']->value) != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

    <?php } else { ?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories selection is disabled because you have no categories or you are in a "all shops" context.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
</div>
<?php }
}
