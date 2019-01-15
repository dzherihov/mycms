var page = {
    ajaxMethod: 'POST',

    add: function(element) {
        var formData = new FormData();
        var button = $(element);

        formData.append('title', $('#formTitle').val());
        formData.append('content', CKEDITOR.instances.editor1.getData());

        $.ajax({
            url: '/admin/page/add/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){
                button.addClass('loading');
                button.addClass('disabled');
            },
            success: function(result){
                console.log(result);
                window.location = '/admin/pages/edit/' + result;
            }
        });
    },

    update: function(element) {
        var formData = new FormData();
        var button = $(element);

        formData.append('page_id', $('#formPageId').val());
        formData.append('title', $('#formTitle').val());
        formData.append('content', CKEDITOR.instances.editor1.getData());
        formData.append('seo_description', $('#formSeoDescription').val());
        formData.append('seo_keywords', $('#formSeoKeywords').val());
        formData.append('status', $('#status').val());
         formData.append('category', $('#category').val());
        formData.append('imagepage', $('#imagepage').val());
        formData.append('segment', $('#formSegment').val());
        formData.append('type', $('#type').val());

        $.ajax({
            url: '/admin/page/update/',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function(){
                button.addClass('loading');
                button.addClass('disabled');
            },
            success: function(result){
                console.log(result);
                window.location.reload();
            }
        });
    },

    remove: function(pageId) {

        if(!confirm('Delete the page?')) {
            return false;
        }

        var formData = new FormData();

        formData.append('page_id', pageId);

        if (pageId < 1) {
            return false;
        }

        $.ajax({
            url: '/admin/page/remove/',
            type: this.ajaxMethod,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                window.location = '/admin/pages/';
            }
        });
    }
};

console.log(page);