<?php $this->theme->header(); ?>

    <main>
        <div class="ui container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $post->title ?></h3>
                </div>
            </div>
            <div class="ui grid">
                <div class="twelve wide column">
                    <form class="ui form" id="formPost">
                         <input type="hidden" name="post_id" id="formPostId" value="<?= $post->id ?>" />
                         <input type="hidden"  name="id_author" id="formAuthId" value="<?= $_COOKIE["auth_id"] ?>" />
                        <div class="field">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" value="<?= $post->title ?>" placeholder="Title post...">
                        </div>
                        <div class="field">
                            <label for="formContent">Content</label>

                            <textarea name="content" id="editor1" rows="10" cols="80" id="formContent">
                                 <?= $post->content ?>
                            </textarea>
                              
                        </div>

                        <div class="ui styled fluid accordion">
                          <div class="title active"><i class="bar chart icon"></i> Seo module </div>
                          <div class="content active">
                            <div class="field">
                              <label for="formSeoDescription">Description</label>
                              <input type="text" name="seo_description" id="formSeoDescription" value="<?= $post->seo_description ?>" placeholder="Description post...">
                            </div>

                            <div class="field">
                              <label for="formSeoKeywords">Keywords</label>
                              <input type="text" name="seo_keywords" id="formSeoKeywords" value="<?= $post->seo_keywords ?>" placeholder="Keywords post...">                        
                            </div>
                          </div>
                        </div>

                     
                    </form>
                </div>
                <div class="four wide column">
                    <div class="ui segment">
                     <p>Update this page</p>
                     <div class="field">
                            <label>Author: 
                            <?php foreach (User::get($post->id_author) as $item): ?>
                            <?php echo stristr($item->email, '@', true); ?>
                            <?php  endforeach; ?>
                            </label><br>

                            <label>Date: <?= $post->date ?></label>
                            <div class="grouped fields">
                              <label>Status: </label>

                                <div class="ui radio checkbox">
                                  <input type="radio" id="status1" name="status" checked="checked" value="unpublished">
                                  <label>False</label>
                                </div>


                                <div class="ui radio checkbox">
                                  <input type="radio" id="status2" name="status" value="published">
                                  <label>True</label>
                                </div>
                              </div>
                    </div>
                    <div class="ui horizontal divider"><i class="bar chart icon"></i></div>
                    <div class="ui buttons grid">
                        <button data-tooltip="Delete post" onclick="post.remove($('#formPostId').val())" class="ui red button">Delete</button>
                         <button data-tooltip="Save post" type="submit" class="ui primary button" onclick="post.update(this)">
                            Update
                        </button>
                    </div>
                     
                </div>
                </div>
                </form>
            </div>
        </div>
    </main>
<script>CKEDITOR.replace( 'editor1' );</script>
<?php $this->theme->footer(); ?>
<script type="text/javascript">
  if ('<?= $post->status ?>' == 'published')
    $('#status2').attr('checked',true);
  else
    $('#status1').attr('checked',true);
    </script>