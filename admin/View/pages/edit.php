<?php $this->theme->header(); ?>

    <main>
        <div class="ui container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $page->title ?></h3> 
                    <div style="width: 100%" class="ui labeled input">
                                <div class="ui label">
                                <?php echo 'http://test1.ru' . '/' //. \Engine\Helper\Text::transliteration($page->title) ?>
                                </div>
                                <input type="text" name="segment" class="form-control" id="formSegment" value="<?= $page->segment ?>" placeholder="segment-link page">
                                 <a class="ui tag label" target="blank" href=" <?php echo 'http://test1.ru' . '/' . $page->segment ?>">
                                    Visit
                                    </a>
                    </div>
                </div>
            </div>
            <div class="ui grid">
                <div class="eleven wide column">
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


                        <div class="ui styled fluid accordion">
                          <div class="title active"><i class="bar chart icon"></i>Seo module </div>
                          <div class="content active">
                            <div class="field">
                              <label for="formSeoDescription">Description</label>
                              <input type="text" name="seo_description" id="formSeoDescription" value="<?= $page->seo_description ?>" placeholder="Description page...">
                            </div>

                            <div class="field">
                              <label for="formSeoKeywords">Keywords</label>
                              <input type="text" name="seo_keywords" id="formSeoKeywords" value="<?= $page->seo_keywords ?>" placeholder="Keywords page...">                        
                            </div>
                          </div>
                        </div>
                    </form>
                </div>

                <div class="five wide column">
                       <div class="ui segments">
                        <div class="ui blue segment">
                            <h4>Update</h4>
                        </div>
                        <div class="ui form segment">
                            <div class="field">
                                  <label>Date: <?= $page->date ?></label>
                                <label>Статус</label>
                                <select id="status" class="ui search dropdown">
                                    <option value="publish"<?php if ('publish' == $page->status) echo ' selected'; ?>>Опубликовано</option>
                                    <option value="draft"<?php if ('draft' == $page->status) echo ' selected'; ?>>В корзине</option>
                                </select>

                            </div>
                        </div>
                        <div class="ui secondary segment">
                              <div class="ui buttons grid">
                            <button data-tooltip="Delete page" onclick="page.remove($('#formPageId').val());" class="ui red button">Delete</button>
                            <button data-tooltip="Update page" type="submit" class="ui primary button" onclick="page.update(this)">
                                Update
                            </button>
</div>
                        </div>
                    </div>

                    <div class="ui segments">
                        <div class="ui blue segment">
                            <h4>Setting</h4>
                        </div>
                        <div class="ui form segment">
                            <div class="field">
                                <label>Type page</label>
                                <select id="type" class="ui search dropdown">
                                    <option value="page">Basic</option>
                                    <?php foreach (getTypes('page') as $key => $type): ?>
                                        <option value="<?php echo $key ?>"<?php if ($key == $page->type) echo ' selected'; ?>>
                                            <?php echo $type ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="field">
                                <label>Category</label>
                                <input type="text" name="category" id="category" value="<?= $page->category ?>" placeholder="Category">
                            </div>
                            <div class="field">
                              <label>Image page</label>
                             
                             <div class="ui centered card">
                                <div class="image">
                                    <img src="<?= $page->imagepage ?>">
                                </div>
                                <div class="content">
                                    <input type="text" name="imagepage" id="imagepage" value="<?= $page->imagepage ?>" placeholder="Link image">
                                </div>
                            </div>
                      
                            </div>
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
<script>CKEDITOR.replace( 'editor1' );

</script>
<?php $this->theme->footer(); ?>