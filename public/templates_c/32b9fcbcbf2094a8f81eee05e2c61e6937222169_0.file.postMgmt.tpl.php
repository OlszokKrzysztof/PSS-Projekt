<?php
/* Smarty version 3.1.33, created on 2023-05-21 13:19:45
  from 'C:\xampp\htdocs\Projekt\app\views\postMgmt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6469fe5155fcd6_78647663',
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
function content_6469fe5155fcd6_78647663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17455992826469fe51554238_13141921', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_17455992826469fe51554238_13141921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17455992826469fe51554238_13141921',
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
