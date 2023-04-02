<?php
/* Smarty version 3.1.33, created on 2023-01-26 21:46:19
  from 'C:\xampp\htdocs\Projekt\app\views\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d2e69bd98a22_40371579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7beea51052af1e8f7e59a625377c75c01be0cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\category.tpl',
      1 => 1674410200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2e69bd98a22_40371579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171439243163d2e69bd88ce1_30377979', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_171439243163d2e69bd88ce1_30377979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_171439243163d2e69bd88ce1_30377979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Projekt\\lib\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

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

<?php
}
}
/* {/block 'content'} */
}
