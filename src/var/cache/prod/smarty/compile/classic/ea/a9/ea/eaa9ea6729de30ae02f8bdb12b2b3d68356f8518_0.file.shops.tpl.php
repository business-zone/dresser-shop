<?php
/* Smarty version 3.1.43, created on 2022-12-21 04:03:33
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a27785551d83_43999069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa9ea6729de30ae02f8bdb12b2b3d68356f8518' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl',
      1 => 1671588397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a27785551d83_43999069 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['asso_shops']->value))) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
