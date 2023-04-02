{extends file="templates/main.tpl"}
{block name=content}
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{$post.title}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{$post.created_at}</div>
                            <!-- Post categories-->
                       <div class="col-md-6">
        <div>
            {for $key=1 to 5}
          <span class="fa fa-star 
          {if $key<=$star}
          checked
          {/if}
          "></span>
          {/for}
          | {$star}
        </div>
    </div>     
                        </header>
                       
                        <section class="mb-5">
                            {$post.description nofilter}
                          </section>
                    </article>

                    <!-- Comments section-->

                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                {if "" == $user}
                                Aby dodać komentarz musisz być zalogowany.<br><br>
                                {else}
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
                                <input type="hidden" name="post_id" value="{$post.id}">
                                </form>
                                {/if}
                                <!-- Comment with nested comments-->
                               {foreach from=$comments item=comment}
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">{$comment.email}</div>
                                            {$comment.content}
                                    </div>
                                    {if $user != "" && $user->role_id == "3"}
                                    <a href="/Projekt/public/removeComment/{$comment.id}"> Remove </a>
                                    {/if}
                                </div>
                                {/foreach}
                            </div>
                        </div>
                    </section>
            </div>
        </div>
        {/block}

