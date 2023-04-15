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
            {if "" == $user}
            <a class="btn btn-sm btn-outline-secondary" href="/Projekt/public/form">Sign in</a>
            {else}
            {$user->email} | <a href="/Projekt/public/logout"> Logout </a>
            {/if}
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
        {foreach from=$categories item=category}
             <a class="p-2 text-muted" href="/Projekt/public/category/{$category.id}">{$category.name}</a>
        {/foreach}     

        </nav>
      </div>
      {block name=content} {/block}
      
    </div>



<footer class="blog-footer">
      <p>Created By Krzysztof Olszok.</p>
      <p>
        {if $user != "" && $user->role_id == "1"} 
        <a href="/Projekt/public/users/">Manage Users</a><br>
        {/if}
        {if $user != "" && $user->role_id == "3"} 
        <a href="/Projekt/public/postMgmt/">Manage Posts</a><br>
        {/if}
        <a href="/Projekt/public/home/">Back to main page</a>
      </p>
    </footer>
    </body>

    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
    <script src="/Projekt/public/js/code.js"></script>
</html>