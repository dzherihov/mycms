var post = {
    ajaxMethod: 'POST',

    add: function(element) {
        var formData = new FormData();
        var button = $(element);

        formData.append('title', $('#formTitle').val());
        formData.append('content', CKEDITOR.instances.editor1.getData());

        $.ajax({
            url: '/admin/post/add/',
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
                window.location = '/admin/posts/edit/' + result;
            }
        });
    },

    update: function(element) {
        var formData = new FormData();
        var button = $(element);

        formData.append('post_id', $('#formPostId').val());
        formData.append('title', $('#formTitle').val());
        formData.append('content', CKEDITOR.instances.editor1.getData());

        $.ajax({
            url: '/admin/post/update/',
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

console.log(post);