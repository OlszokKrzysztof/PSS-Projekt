<?php
/* Smarty version 3.1.33, created on 2023-01-28 00:56:34
  from 'C:\xampp\htdocs\Projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d464b2eba075_28786832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef297889daccf7b55ee0cfbe1cb57110ffbddea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\templates\\main.tpl',
      1 => 1674863791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d464b2eba075_28786832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>AllShock|Blog</title>
    <link href="/Projekt/public/css/style.css" rel="stylesheet">
    <link href="/Projekt/public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="page">
    
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="/Projekt/public/home">AllShock|Blog</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
            </a>
            <?php if ('' == $_smarty_tpl->tpl_vars['user']->value) {?>
            <a class="btn btn-sm btn-outline-secondary" href="/Projekt/public/form">Sign in</a>
            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
 | <a href="/Projekt/public/logout"> Logout </a>
            <?php }?>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
             <a class="p-2 text-muted" href="/Projekt/public/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     

        </nav>
      </div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32889125063d464b2eb4a71_91364563', 'content');
?>

      
    </div>



<footer class="blog-footer">
      <p>Created By Krzysztof Olszok.</p>
      <p>
        <?php if ($_smarty_tpl->tpl_vars['user']->value != '' && $_smarty_tpl->tpl_vars['user']->value->role_id == "1") {?> 
        <a href="/Projekt/public/users/">Manage Users</a><br>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value != '' && $_smarty_tpl->tpl_vars['user']->value->role_id == "3") {?> 
        <a href="/Projekt/public/postMgmt/">Manage Posts</a><br>
        <?php }?>
        <a href="/Projekt/public/home/">Back to main page</a>
      </p>
    </footer>
    </body>
</html><?php }
/* {block 'content'} */
class Block_32889125063d464b2eb4a71_91364563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_32889125063d464b2eb4a71_91364563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
