{extends file="templates/main.tpl"}
{block name=content}
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark row">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">{$post_one.title}</h1>
        <p class="lead my-3">{$post_one.description|truncate:80:"...":true:true}</p>
        <p class="lead mb-0"><a href="/Projekt/public/post/{$post_one.id}" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
 
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">{$post_two.name}</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/Projekt/public/post/{$post_two.id}">{$post_two.title}</a>
              </h3>
              <div class="mb-1 text-muted">{$post_two.created_at}</div>
              <p class="card-text mb-auto">{$post_two.description|truncate:80:"...":true:true}</p>
              <a href="/Projekt/public/post/{$post_two.id}">Continue reading</a>
          </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">{$post_three.name}</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="/Projekt/public/post/{$post_three.id}">{$post_three.title}</a>
              </h3>
              <div class="mb-1 text-muted">{$post_three.created_at}</div>
              <p class="card-text mb-auto">{$post_three.description|truncate:80:"...":true:true}</p>
              <a href="/Projekt/public/post/{$post_three.id}">Continue reading</a>
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
{foreach from=$posts item=post}
    <div class="col-12 col-md-4 mb-3">
    
<div class="card">
              <div class="card-body">
                <h5 class="card-title">{$post.title}</h5>
                <p class="card-text">{$post.description|truncate:80:"...":true:true}</p>
                <a href="/Projekt/public/post/{$post.id}" class="card-link">Continue reading</a>
              </div>
          </div>
          </div>

{/foreach}
</div>
        </div>
    </div>
  </main>
  {/block}
