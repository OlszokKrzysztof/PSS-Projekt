{extends file="templates/main.tpl"}
{block name=content}
    <form method="POST">
              
        <div class="form-group">
    <label for="exampleFormControlInput1">Post title:</label>
    <input type="text" name="title" class="ajax form-control">
    <div class="ajaxResult">
    </div>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post description:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div class="form-group">
    <select class="form-select" name="category" aria-label="Default select example">
  <option selected>Choose category</option>
  {foreach from=$categories item=category}
      <option value="{$category.id}">{$category.name}</option>
  {/foreach}
</select>
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

{/block}