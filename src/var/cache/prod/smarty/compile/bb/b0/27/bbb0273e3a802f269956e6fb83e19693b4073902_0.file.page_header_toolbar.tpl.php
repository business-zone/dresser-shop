<?php
/* Smarty version 3.1.43, created on 2022-12-21 14:39:12
  from '/var/www/html/admin9f46/themes/new-theme/template/controllers/orders/page_header_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a30c8083efd7_61765477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb0273e3a802f269956e6fb83e19693b4073902' => 
    array (
      0 => '/var/www/html/admin9f46/themes/new-theme/template/controllers/orders/page_header_toolbar.tpl',
      1 => 1671588392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a30c8083efd7_61765477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141178103563a30c80831a21_41280239', 'pageTitle');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page_header_toolbar.tpl');
}
/* {block 'pageTitle'} */
class Block_141178103563a30c80831a21_41280239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_141178103563a30c80831a21_41280239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!(isset($_smarty_tpl->tpl_vars['use_regular_h1_structure']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('use_regular_h1_structure', true);?>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['use_regular_h1_structure']->value) {?>
    <h1 class="title">
      <?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( end($_smarty_tpl->tpl_vars['title']->value) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
}?>
    </h1>
  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

  <?php }
}
}
/* {/block 'pageTitle'} */
}
