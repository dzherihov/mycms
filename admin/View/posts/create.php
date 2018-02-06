<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Create post</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formPost">
                        <div class="form-group">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title post...">
                        </div>
                        <div class="form-group">
                            <label for="formContent">Content</label>
                            <textarea name="content" id="editor1" rows="10" cols="80" id="formContent"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Publish this post</p>
                        <button type="submit" class="btn btn-primary" onclick="post.add()">
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>CKEDITOR.replace( 'editor1' );</script>
<?php $this->theme->footer(); ?>