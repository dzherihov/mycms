var menu = {
    listItems: $('#listItems'),

    ajaxMethod: 'POST',

    add: function(element) {
        var formData = new FormData();
        var menuName = $('#menuName').val();
        var button = $(element);
        formData.append('name', menuName);

        if (menuName.length < 1) {
            return false;
        }

        $.ajax({
            url: '/admin/setting/ajaxMenuAdd/',
            type: this.ajaxMethod,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                button.addClass('loading');
                button.addClass('disabled');
            },
            success: function(result){
                if (result > 0) {
                    location.reload();
                }

            }
        });
    },
    addItem: function(menuId, element) {
        var formData = new FormData();

        formData.append('menu_id', menuId);

        if (menuId < 1) {
            return false;
        }
        var button = $(element);
        var _this = this;
        $.ajax({
            url: '/admin/setting/ajaxMenuAddItem/',
            type: this.ajaxMethod,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                button.addClass('loading');
                button.addClass('disabled');
            },
            success: function(result){
                if (result) {
                    _this.listItems.append(result);
                }
                 window.location.reload();
            }
        });
    },

    updateItem: function(itemId, field, element) {
        var formData = new FormData();

        formData.append('item_id', itemId);
        formData.append('field', field);
        formData.append('value', $(element).val());

        if (itemId < 1) {
            return false;
        }

        var _this = this;
        $.ajax({
            url: '/admin/settings/ajaxMenuUpdateItem/',
            type: this.ajaxMethod,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                if (result) {

                }
            }
        });
    },

    removeItem: function(itemId) {

        if(!confirm('Delete the menu item?')) {
            return false;
        }

        var formData = new FormData();

        formData.append('item_id', itemId);

        if (itemId < 1) {
            return false;
        }

        $.ajax({
            url: '/admin/setting/ajaxMenuRemoveItem/',
            type: this.ajaxMethod,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                $('.menu-item-' + itemId).remove();
            }
        });
    },

    removeMenu: function(menuId) {

        if(!confirm('Delete the menu?')) {
            return false;
        }

        var formData = new FormData();

        formData.append('menu_id', menuId);

        if (menuId < 1) {
            return false;
        }

        $.ajax({
            url: '/admin/setting/ajaxMenuRemove/',
            type: this.ajaxMethod,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){

            },
            success: function(result){
                window.location = '/admin/settings/appearance/menus/';
            }
        });
    }
};