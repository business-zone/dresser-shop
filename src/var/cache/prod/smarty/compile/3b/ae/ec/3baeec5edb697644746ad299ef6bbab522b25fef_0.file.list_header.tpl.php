<?php
/* Smarty version 3.1.43, created on 2022-12-21 03:23:07
  from '/var/www/html/admin9f46/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63a26e0b6ad152_58924356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3baeec5edb697644746ad299ef6bbab522b25fef' => 
    array (
      0 => '/var/www/html/admin9f46/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1671588392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a26e0b6ad152_58924356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17733541263a26e0b6ab2d7_85231669', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_17733541263a26e0b6ab2d7_85231669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_17733541263a26e0b6ab2d7_85231669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
