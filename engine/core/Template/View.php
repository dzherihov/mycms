<?php

namespace Engine\core\Template;

use Engine\core\Template\Theme;
use Engine\DI\DifI;

class View
{

	public $di;
	/**
	 * @var \Engine\core\Template\Theme
	 */
	protected $theme;

	/**
	 * View Constructor.
	 */
	public function __construct(DifI $di)
	{
		$this->di    = $di;
		$this->theme = new Theme();
	}

	/**
	 * @param $template
	 * @param array $vars
	 * @throws \Exception
	 */
	public function render($template, $vars = [])
	{
		$templatePath = $this->getTemplatePath($template, ENV);

		if(!is_file($templatePath))
		{
			throw new \InvalidArgumentException(
				sprintf('Template "%s" not found in "%s"', $template, $templatePath)
			);
		}

		$vars['lang'] = $this->di->get('language');
		$this->theme->setData($vars);
		extract($vars);

		ob_start();
		ob_implicit_flush(0);

		try {
			require $templatePath;
		} catch (Exception $e) {
			ob_end_clean();
			throw $e;
		}

		echo ob_get_clean();
	}

	private function getTemplatePath($template, $env = null)
	{
		if($env == 'Cms')
		{
			return ROOT_DIR . '/content/themes/default/' . $template . '.php';
		}

		return ROOT_DIR . '/View/' . $template . '.php';
	}
}

?>