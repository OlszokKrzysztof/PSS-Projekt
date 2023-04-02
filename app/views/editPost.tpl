{extends file="templates/main.tpl"}
{block name=content}
    <form method="POST">
              
        <div class="form-group">
    <label for="exampleFormControlInput1">Post title:</label>
    <input type="text" value="{$post.title}" name="title" class="form-control">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post description:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{$post.description}</textarea>
  </div>

 <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

{/block}