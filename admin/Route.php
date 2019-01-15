<?php
/**
 * List routes.
 */

	$this->router->add('login', '/admin/login/', 'LoginController:form');
	$this->router->add('auth-admin', '/admin/auth/', 'LoginController:authAdmin', 'POST');
	$this->router->add('dashboard', '/admin/', 'DashboardController:index');
	$this->router->add('logout', '/admin/logout/', 'DashboardController:logout');

	//Pages Routes (GET)
	$this->router->add('pages', '/admin/pages/', 'PageController:listing');
	$this->router->add('page-create', '/admin/pages/create/', 'PageController:create');
	$this->router->add('page-edit', '/admin/pages/edit/(id:int)', 'PageController:edit');
	//Pages Routes (POST)
	$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST');
	$this->router->add('page-update', '/admin/page/update/', 'PageController:update', 'POST');
	$this->router->add('page-remove', '/admin/page/remove/', 'PageController:remove', 'POST');

	//Post Routes (GET)
	$this->router->add('posts', '/admin/posts/', 'PostController:listing');
	$this->router->add('post-create', '/admin/posts/create/', 'PostController:create');
	$this->router->add('post-edit', '/admin/posts/edit/(id:int)', 'PostController:edit');
	//Post Routes (POST)
	$this->router->add('post-add', '/admin/post/add/', 'PostController:add', 'POST');
	$this->router->add('post-update', '/admin/post/update/', 'PostController:update', 'POST');
	$this->router->add('post-remove', '/admin/post/remove/', 'PostController:remove', 'POST');

	//Setting Routes (GET)
	$this->router->add('settings-general', '/admin/settings/general/', 'SettingController:general');
	$this->router->add('settings-menus', '/admin/settings/appearance/menus/', 'SettingController:menus');
	$this->router->add('settings-theme', '/admin/settings/appearance/themes/', 'SettingController:themes');
	$this->router->add('settings-myinfo', '/admin/settings/myinfo/', 'SettingController:myinfo');
	$this->router->add('settings-social', '/admin/settings/social/', 'SettingController:social');
	//Setting Routes (POST)
	$this->router->add('settings-update', '/admin/settings/update/', 'SettingController:update', 'POST');
	$this->router->add('setting-add-menu', '/admin/setting/ajaxMenuAdd/', 'SettingController:ajaxMenuAdd', 'POST');
	$this->router->add('setting-romove-menu', '/admin/setting/ajaxMenuRemove/', 'SettingController:ajaxMenuRemove', 'POST');

	$this->router->add('setting-add-menu-item', '/admin/setting/ajaxMenuAddItem/', 'SettingController:ajaxMenuAddItem', 'POST');
	$this->router->add('setting-sort-menu-items', '/admin/setting/ajaxMenuSortItems/', 'SettingController:ajaxMenuSortItems', 'POST');
	$this->router->add('setting-remove-menu-item', '/admin/setting/ajaxMenuRemoveItem/', 'SettingController:ajaxMenuRemoveItem', 'POST');
	$this->router->add('setting-update-menu-item', '/admin/settings/ajaxMenuUpdateItem/', 'SettingController:ajaxMenuUpdateItem', 'POST');
	$this->router->add('setting-update-theme', '/admin/settings/activateTheme/', 'SettingController:activateTheme', 'POST');


?>