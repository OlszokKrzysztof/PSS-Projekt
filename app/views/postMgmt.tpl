{extends file="templates/main.tpl"}
{block name=content}
        {foreach from=$posts item=post}
       {$post.id}.{$post.title} - <a href="/Projekt/public/editPost/{$post.id}"> <button type="submit">Edit</button></a> <a href="/Projekt/public/removePost/{$post.id}"> <button type="submit">Remove</button></a><br>
        {/foreach}
        <a class="btn btn-primary" href="/Projekt/public/addPost/"> Dodaj post: </a>
        {/block}

