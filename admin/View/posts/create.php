<?php $this->theme->header(); ?>

    <main>
        <div class="ui container">
            <div class="row">
                <div class="col page-title">
                    <h3>Create post</h3>
                </div>
            </div>
            <div class="ui grid">
                <div class="twelve wide column">
                    <form class="ui form" id="formPost">
                        <input type="hidden"  name="id_author" id="formAuthId" value="<?= $_COOKIE["auth_id"] ?>" />
                        <div id="fieldEnpty" class="field">
                            <label for="formTitle">Title *</label>
                            <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title post...">
                        </div>
                        <div class="field">
                            <label for="formContent">Content</label>
                            <textarea name="content" id="editor1" rows="10" cols="80" id="formContent">&emsp;</textarea>
                        </div>

                        <div class="ui styled fluid accordion">
                          <div class="title active"><i class="bar chart icon"></i> Seo module </div>
                          <div class="content active">
                            <div id="field" class="field">
                              <label for="formSeoDescription">Description</label>
                              <input type="text" name="seo_description" class="form-control" id="formSeoDescription" value=" " placeholder="Description post...">
                            </div>

                            <div id="field" class="field">
                              <label for="formSeoKeywords">Keywords</label>
                              <input type="text" name="seo_keywords" class="form-control" id="formSeoKeywords" value=" " placeholder="Keywords post...">                        
                            </div>
                          </div>
                        </div>

                </div>
                <div class="four wide column">
                    <div class="ui segment">
                     <p>Update this page</p>
                     <div class="field">
                            
                            <div class="grouped fields">
                              <label>Status: </label>

                                <div class="ui radio checkbox">
                                  <input type="radio" id="status1" name="status"  value="unpublished">
                                  <label>False</label>
                                </div>


                                <div class="ui radio checkbox">
                                  <input type="radio" id="status2" name="status" checked="checked" value="published">
                                  <label>True</label>
                                </div>
                              </div>
                              
                    </div>
                    </form>
                    <div class="ui horizontal divider"><i class="bar chart icon"></i></div>
                    <div class="ui buttons grid">
                        <button id="createButt" type="submit" class="ui primary button" onclick="emptyField('#fieldEnpty');">
                            Publish
                        </button>
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
                post.add('#createButt');
                input.removeClass('error');
            }
        }

    </script>

<script>CKEDITOR.replace( 'editor1' );</script>

<?php $this->theme->footer(); ?>