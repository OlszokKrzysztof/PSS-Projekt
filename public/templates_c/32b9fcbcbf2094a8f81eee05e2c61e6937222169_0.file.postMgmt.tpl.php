<?php
/* Smarty version 3.1.33, created on 2023-01-28 00:45:15
  from 'C:\xampp\htdocs\Projekt\app\views\postMgmt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d4620b1a62c0_18490059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b9fcbcbf2094a8f81eee05e2c61e6937222169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\postMgmt.tpl',
      1 => 1674863111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d4620b1a62c0_18490059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132920154063d4620b19a879_90702920', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_132920154063d4620b19a879_90702920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_132920154063d4620b19a879_90702920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
       <?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
 - <a href="/Projekt/public/editPost/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"> <button type="submit">Edit</button></a> <a href="/Projekt/public/removePost/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"> <button type="submit">Remove</button></a><br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <a class="btn btn-primary" href="/Projekt/public/addPost/"> Dodaj post: </a>
        <?php
}
}
/* {/block 'content'} */
}
