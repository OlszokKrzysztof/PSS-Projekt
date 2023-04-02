<?php
/* Smarty version 3.1.33, created on 2023-01-26 21:40:10
  from 'C:\xampp\htdocs\Projekt\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d2e52ad73ab7_74372027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61c7155f10a5f8a3ad6a1c42e1a3bae8c392c710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\home.tpl',
      1 => 1674498437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2e52ad73ab7_74372027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11671178863d2e52ad5ab09_47317980', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_11671178863d2e52ad5ab09_47317980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11671178863d2e52ad5ab09_47317980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Projekt\\lib\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark row">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?php echo $_smarty_tpl->tpl_vars['post_one']->value['title'];?>
</h1>
        <p class="lead my-3"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post_one']->value['description'],80,"...",true,true);?>
</p>
        <p class="lead mb-0"><a href="/Projekt/public/post/<?php echo $_smarty_tpl->tpl_vars['post_one']->value['id'];?>
" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
 
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $_smarty_tpl->tpl_vars['post_two']->value['name'];?>
</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/Projekt/public/post/<?php echo $_smarty_tpl->tpl_vars['post_two']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post_two']->value['title'];?>
</a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $_smarty_tpl->tpl_vars['post_two']->value['created_at'];?>
</div>
              <p class="card-text mb-auto"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post_two']->value['description'],80,"...",true,true);?>
</p>
              <a href="/Projekt/public/post/<?php echo $_smarty_tpl->tpl_vars['post_two']->value['id'];?>
">Continue reading</a>
          </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success"><?php echo $_smarty_tpl->tpl_vars['post_three']->value['name'];?>
</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/Projekt/public/post/<?php echo $_smarty_tpl->tpl_vars['post_three']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post_three']->value['title'];?>
</a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $_smarty_tpl->tpl_vars['post_three']->value['created_at'];?>
</div>
              <p class="card-text mb-auto"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post_three']->value['description'],80,"...",true,true);?>
</p>
              <a href="/Projekt/public/post/<?php echo $_smarty_tpl->tpl_vars['post_three']->value['id'];?>
">Continue reading</a>
          </div>
        </div>
    </div>
  </div>
  </div>
  <main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
              Blog list
          </h3>
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
        </div>
    </div>
  </main>
  <?php
}
}
/* {/block 'content'} */
}
