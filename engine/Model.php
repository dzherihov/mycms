<?php

namespace Engine;

use Engine\DI\DifI;
use Engine\core\Database\QueryBuilder;

abstract class Model
{
	/**
	 * @var \Engine\DI\DI
	 */
	protected $di;

	protected $db;
	
	protected $config;

	protected $queryBuilder;

	public function __construct(DifI $di)
	{
		$this->di      = $di;
		$this->db      = $this->di->get('db');
		$this->config  = $this->di->get('config');

		$this->queryBuilder = new QueryBuilder();
	}
}

?>