<?php
/* Smarty version 3.1.43, created on 2022-12-21 15:12:04
  from '/var/www/html/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a31434836979_02358575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62f3a84cbaef2d34d41cc623e044de957195bf4' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/not-found.tpl',
      1 => 1671588398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a31434836979_02358575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162677372663a3143482c750_03926660', 'page_content');
?>

</section>
<?php }
/* {block "error_content"} */
class Block_88484187363a3143482da06_15014931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

      <?php } else { ?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page could not be found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to search our catalog, you may find what you are looking for!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
class Block_27507005863a31434832ea9_60554499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_74967338063a31434835055_98427100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_162677372663a3143482c750_03926660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_162677372663a3143482c750_03926660',
  ),
  'error_content' => 
  array (
    0 => 'Block_88484187363a3143482da06_15014931',
  ),
  'search' => 
  array (
    0 => 'Block_27507005863a31434832ea9_60554499',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_74967338063a31434835055_98427100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88484187363a3143482da06_15014931', "error_content", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27507005863a31434832ea9_60554499', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74967338063a31434835055_98427100', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
