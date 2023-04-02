<?php
/* Smarty version 3.1.33, created on 2023-01-26 21:46:46
  from 'C:\xampp\htdocs\Projekt\app\views\LoginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d2e6b64ada11_95807408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59037864677c0eded18c84288efdadf829b328da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\LoginForm.tpl',
      1 => 1674757166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2e6b64ada11_95807408 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>AllShock|Blog</title>
    <link href="/Projekt/public/css/style.css" rel="stylesheet">
    <link href="/Projekt/public/css/bootstrap.css" rel="stylesheet">
</head>

 <body class="text-center loginpage">
    <form class="form-signin" method="POST">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="mb-3 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a href="/Projekt/public/register"> <div class="btn btn-lg btn-primary btn-block">Register</div> </a>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
    </form>
  </body>
</html>
<?php }
}
