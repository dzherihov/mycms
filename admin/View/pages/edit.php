<?php $this->theme->header(); ?>

    <main>
        <div class="ui container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $page->title ?></h3>
                </div>
            </div>
            <div class="ui grid">
                <div class="fourteen wide column">
                    <form class="ui form segment" id="formPage">
                         <input type="hidden" name="page_id" id="formPageId" value="<?= $page->id ?>" />
                        <div id = "fieldTitle" class="field">
                            <label for="formTitle">Title</label>
                            <input type="text" name="title" class="form-control" id="formTitle" value="<?= $page->title ?>" placeholder="Title page...">
                        </div>
                        <div class="field">
                            <label for="formContent">Content</label>
                             <textarea name="content" id="editor1" rows="10" cols="80" id="formContent">
                                 <?= $page->content ?>
                            </textarea>
                        </div>
                    </form>
                </div>

                <div class="two wide column">
                    <p>Update this page</p>
                    <div class="ui vertical buttons">
                        
                        <button id ='updateButt' data-tooltip="Save page" type="submit" class="ui primary button" onclick="emptyField('#fieldTitle');">
                            Update
                        </button>
                         <button data-tooltip="Delete page" onclick="page.remove($('#formPageId').val());" class="ui red button">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">

        function emptyField(element)
        {
            var input = $(element);
            if($('#formTitle').val() == '') {
                input.addClass('error');
            }
            else {
                page.update('#updateButt')
                input.removeClass('error');
            }
        }

    </script>
<script>CKEDITOR.replace( 'editor1' );</script>
<?php $this->theme->footer(); ?>