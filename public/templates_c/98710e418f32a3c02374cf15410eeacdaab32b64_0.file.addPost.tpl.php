<?php
/* Smarty version 3.1.33, created on 2023-04-15 16:26:14
  from 'C:\xampp\htdocs\Projekt\app\views\addPost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_643ab406bbf2d0_20318080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98710e418f32a3c02374cf15410eeacdaab32b64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\addPost.tpl',
      1 => 1681568176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ab406bbf2d0_20318080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_600741880643ab406bb4a55_75329383', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_600741880643ab406bb4a55_75329383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_600741880643ab406bb4a55_75329383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form method="POST">
              
        <div class="form-group">
    <label for="exampleFormControlInput1">Post title:</label>
    <input type="text" name="title" class="ajax form-control">
    <div class="ajaxResult">
    </div>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post description:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div class="form-group">
    <select class="form-select" name="category" aria-label="Default select example">
  <option selected>Choose category</option>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

<?php
}
}
/* {/block 'content'} */
}
