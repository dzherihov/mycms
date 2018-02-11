<?php $this->theme->header(); ?>

    <main>
        <div class="ui container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $post->title ?></h3>
                </div>
            </div>
            <div class="ui grid">
                <div class="fourteen wide column">
                    <form class="ui form" id="formPost">
                         <input type="hidden" name="post_id" id="formPostId" value="<?= $post->id ?>" />
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
                    </form>
                </div>
                <div class="two wide column">
                    <div>
                        <p>Update this post</p>
                        <button type="submit" class="ui primary button" onclick="post.update(this)">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>CKEDITOR.replace( 'editor1' );</script>
<?php $this->theme->footer(); ?>