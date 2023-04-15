{extends file="templates/main.tpl"}
{block name=content}

<form method="get" class="mb-3">
  <div class="form-group">
    <input type="text" class="form-control" id="search" name="search" placeholder="Szukaj" value="{$search}">
  </div>
  <button type="submit" class="btn btn-primary">Szukaj</button>
</form>

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

<nav aria-label="Page navigation example">
  <ul class="pagination">
    {for $i=1 to $postsCounter / 2}
      <li class="page-item"><a class="page-link" href="?page={$i}">{$i}</a></li>
    {/for}
  </ul>
  
</nav>



{/block}