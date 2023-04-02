<?php
/* Smarty version 3.1.33, created on 2023-01-27 16:14:44
  from 'C:\xampp\htdocs\Projekt\app\views\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d3ea6497b253_09081525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce9a0f7c3deeb4d242ac7f16f4c99bd5bf0523b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\post.tpl',
      1 => 1674832479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d3ea6497b253_09081525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201790665763d3ea64966819_84376629', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'content'} */
class Block_201790665763d3ea64966819_84376629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_201790665763d3ea64966819_84376629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2"><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
</div>
                            <!-- Post categories-->
                       <div class="col-md-6">
        <div>
            <?php
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['key']->step = 1;$_smarty_tpl->tpl_vars['key']->total = (int) ceil(($_smarty_tpl->tpl_vars['key']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['key']->step));
if ($_smarty_tpl->tpl_vars['key']->total > 0) {
for ($_smarty_tpl->tpl_vars['key']->value = 1, $_smarty_tpl->tpl_vars['key']->iteration = 1;$_smarty_tpl->tpl_vars['key']->iteration <= $_smarty_tpl->tpl_vars['key']->total;$_smarty_tpl->tpl_vars['key']->value += $_smarty_tpl->tpl_vars['key']->step, $_smarty_tpl->tpl_vars['key']->iteration++) {
$_smarty_tpl->tpl_vars['key']->first = $_smarty_tpl->tpl_vars['key']->iteration === 1;$_smarty_tpl->tpl_vars['key']->last = $_smarty_tpl->tpl_vars['key']->iteration === $_smarty_tpl->tpl_vars['key']->total;?>
          <span class="fa fa-star 
          <?php if ($_smarty_tpl->tpl_vars['key']->value <= $_smarty_tpl->tpl_vars['star']->value) {?>
          checked
          <?php }?>
          "></span>
          <?php }
}
?>
          | <?php echo $_smarty_tpl->tpl_vars['star']->value;?>

        </div>
    </div>     
                        </header>
                       
                        <section class="mb-5">
                            <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>

                          </section>
                    </article>

                    <!-- Comments section-->

                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <?php if ('' == $_smarty_tpl->tpl_vars['user']->value) {?>
                                Aby dodać komentarz musisz być zalogowany.<br><br>
                                <?php } else { ?>
                                <form action="/Projekt/public/addComment" method="POST" class="mb-4"><textarea class="form-control" rows="3" name="content" placeholder="Join the discussion and leave a comment!"></textarea>
                                
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="opinion" id="inlineRadio1" value="1" required>
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="opinion" id="inlineRadio2" value="2" required>
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="opinion" id="inlineRadio3" value="3" required>
  <label class="form-check-label" for="inlineRadio3">3</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="opinion" id="inlineRadio3" value="4" required>
  <label class="form-check-label" for="inlineRadio3">4</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="opinion" id="inlineRadio3" value="5" required>
  <label class="form-check-label" for="inlineRadio3">5</label>
</div>

                                <input type="submit" value="dodaj">
                                <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                </form>
                                <?php }?>
                                <!-- Comment with nested comments-->
                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['comment']->value['email'];?>
</div>
                                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value != '' && $_smarty_tpl->tpl_vars['user']->value->role_id == "3") {?>
                                    <a href="/Projekt/public/removeComment/<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
"> Remove </a>
                                    <?php }?>
                                </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
        <?php
}
}
/* {/block 'content'} */
}
