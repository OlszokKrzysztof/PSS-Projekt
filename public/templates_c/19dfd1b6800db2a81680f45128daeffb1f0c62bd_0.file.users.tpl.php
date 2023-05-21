<?php
/* Smarty version 3.1.33, created on 2023-05-21 13:19:32
  from 'C:\xampp\htdocs\Projekt\app\views\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6469fe447e02a7_66413198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19dfd1b6800db2a81680f45128daeffb1f0c62bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\users.tpl',
      1 => 1674765729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469fe447e02a7_66413198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2673711466469fe447ced96_10548376', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_2673711466469fe447ced96_10548376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2673711466469fe447ced96_10548376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <form method="post" action="/Projekt/public/updateUser">
    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
    <select name="role">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['role']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
"
            <?php if ($_smarty_tpl->tpl_vars['role']->value['id'] == $_smarty_tpl->tpl_vars['user']->value['role_id']) {?>
                selected
            <?php }?>
            ><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input type="password" placeholder="password" name="password" value="">
    <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
    <input type="submit" value="Update">
    <a class="btn btn-primary" href="/Projekt/public/removeUser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Remove</a>
    </form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php
}
}
/* {/block 'content'} */
}
