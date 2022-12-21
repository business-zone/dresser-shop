<?php
/* Smarty version 3.1.43, created on 2022-12-21 04:03:33
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_functions/show_limit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a2778553e3a5_86079756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b59e4257f156da47c140c71ca8a023d29c3277' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_functions/show_limit.tpl',
      1 => 1671588397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2778553e3a5_86079756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'get_limit_select' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classic/70/b5/9e/70b59e4257f156da47c140c71ca8a023d29c3277_0.file.show_limit.tpl.php',
    'uid' => '70b59e4257f156da47c140c71ca8a023d29c3277',
    'call_name' => 'smarty_template_function_get_limit_select_115549108163a2778552e439_45194967',
  ),
));
?>

<?php }
/* smarty_template_function_get_limit_select_115549108163a2778552e439_45194967 */
if (!function_exists('smarty_template_function_get_limit_select_115549108163a2778552e439_45194967')) {
function smarty_template_function_get_limit_select_115549108163a2778552e439_45194967(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('element'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('name', ((string)$_smarty_tpl->tpl_vars['element']->value)."_filter_show_limit");?>
  <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No limit','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
    <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 20+1 - (2) : 2-(20)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 2, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</option>
    <?php }
}
?>
  </select>
<?php
}}
/*/ smarty_template_function_get_limit_select_115549108163a2778552e439_45194967 */
}
