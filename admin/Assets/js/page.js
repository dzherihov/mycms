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
    }
};

console.log(page);