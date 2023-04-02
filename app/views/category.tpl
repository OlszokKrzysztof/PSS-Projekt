{extends file="templates/main.tpl"}
{block name=content}
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

{/block}