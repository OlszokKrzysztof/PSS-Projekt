{extends file="templates/main.tpl"}
{block name=content}
      {foreach from=$users item=user}
    <form method="post" action="/Projekt/public/updateUser">
    <input type="email" name="email" value="{$user.email}">
    <select name="role">
        {foreach from=$roles key=k item=role}
            <option value="{$role.id}"
            {if $role.id == $user.role_id}
                selected
            {/if}
            >{$role.name}</option>
        {/foreach}
    </select>
    <input type="password" placeholder="password" name="password" value="">
    <input type="hidden" name="user_id" value="{$user.id}">
    <input type="submit" value="Update">
    <a class="btn btn-primary" href="/Projekt/public/removeUser/{$user.id}">Remove</a>
    </form>
{/foreach}

        {/block}

