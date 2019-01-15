var setting = {
    ajaxMethod: 'POST',

    update: function(element) {

        var formData = $('#settingForm').serialize();
         //formData.append('fileavatar', $('#idFile').val());
        var button = $(element);
        $.ajax({
            url: '/admin/settings/update/',
            type: this.ajaxMethod,
            data: formData,
            beforeSend: function(){
                button.addClass('loading');
                button.addClass('disabled');
            },
            success: function(result){
                 window.location.reload();
            }
        });
    },
     setActiveTheme: function(element, theme) {
        var formData = new FormData();
        var button = $(element);

        formData.append('theme', theme);
        $.ajax({
            url: '/admin/settings/activateTheme/',
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
                window.location.reload();
            }
        });
    }
};