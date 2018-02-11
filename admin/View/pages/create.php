<?php $this->theme->header(); ?>

    <main>
        <div class="ui container">
            <div class="row">
                <div class="col page-title">
                    <h3>Create page</h3>
                </div>
            </div>
            <div class="ui grid">
                <div class="fourteen wide column">
                    <form class="ui form" id="formPage">
                        <div class="field">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title page...">
                        </div>
                        <div class="field">
                            <label for="formContent">Content</label>
                            <textarea name="content" id="editor1" rows="10" cols="80" id="formContent"></textarea>
                        </div>
                    </form>
                </div>
                <div class="two wide column">
                    <div>
                        <p>Publish this page</p>
                        <button type="submit" class="ui primary button" onclick="page.add(this)">
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
<script>CKEDITOR.replace( 'editor1' );</script>
<?php $this->theme->footer(); ?>