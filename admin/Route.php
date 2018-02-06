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

	//Post Routes (GET)
	$this->router->add('posts', '/admin/posts/', 'PostController:listing');
	$this->router->add('post-create', '/admin/posts/create/', 'PostController:create');
	$this->router->add('post-edit', '/admin/posts/edit/(id:int)', 'PostController:edit');
	//Post Routes (POST)
	$this->router->add('post-add', '/admin/post/add/', 'PostController:add', 'POST');
	$this->router->add('post-update', '/admin/post/update/', 'PostController:update', 'POST');

	//Setting Routes (GET)
	$this->router->add('settings-general', '/admin/settings/general/', 'SettingController:general');
	$this->router->add('settings-update', '/admin/settings/update/', 'SettingController:update', 'POST');



?>