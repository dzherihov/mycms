<?php

namespace Engine\core\Auth;

use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
	protected $authorized = false;
	protected $hash_user;

	public function authorized()
	{
		return $this->authorized;
	}

	public function hashUser()
	{
		return Cookie::get('auth_user');
	}

	public function authorize($user)
	{
		Cookie::set('auth_authorized', true);
		Cookie::set('auth_user', $user);
	}

	public function unAuthorize($user)
	{
		Cookie::delete('auth_authorized');
		Cookie::delete('auth_user');
	}

	public static function salt()
	{
		return (string) rand(10000000, 99999999);
	}

	public static function encryptPassword($password, $salt = '')
	{
		return hash ('sha256', $password . $salt);
	}
}

?>