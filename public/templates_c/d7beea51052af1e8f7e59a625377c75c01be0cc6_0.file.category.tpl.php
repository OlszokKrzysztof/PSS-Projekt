<?php
/* Smarty version 3.1.33, created on 2023-05-21 13:15:57
  from 'C:\xampp\htdocs\Projekt\app\views\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6469fd6da231c8_38575754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7beea51052af1e8f7e59a625377c75c01be0cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\category.tpl',
      1 => 1681567523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6469fd6da231c8_38575754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3095749116469fd6da0d720_37852576', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_3095749116469fd6da0d720_37852576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3095749116469fd6da0d720_37852576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Projekt\\lib\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<form method="get" class="mb-3">
  <div class="form-group">
    <input type="text" class="form-control" id="search" name="search" placeholder="Szukaj" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
  </div>
  <button type="submit" class="btn btn-primary">Szukaj</button>
</form>

<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
    <div class="col-12 col-md-4 mb-3">
    
<div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h5>
                <p class="card-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['description'],80,"...",true,true);?>
</p>
                <a href="/Projekt/public/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="card-link">Continue reading</a>
              </div>
          </div>
          </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['postsCounter']->value/2+1 - (1) : 1-($_smarty_tpl->tpl_vars['postsCounter']->value/2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
      <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }
}
?>
  </ul>
  
</nav>



<?php
}
}
/* {/block 'content'} */
}
