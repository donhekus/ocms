<?php

namespace OCMS\Router;

use Closure;

/**
 * Class Router
 */
class Router
{
	/**
	 * @var array[]
	 */
	private $routes;

	/**
	 * Router constructor.
	 */
	public function __construct()
	{
		$this->routes = [
			'GET' => [],
			'POST' => []
		];
	}

	/**
	 * @param string $route
	 * @param Closure $action
	 */
	public function get(string $route, Closure $action): void
	{
		$this->routes['GET'][$route] = [
			'action' => $action
		];
	}

	/**
	 * @param string $method
	 * @param string $path
	 *
	 * @return mixed
	 */
	public function processRoute(string $method, string $path)
	{
		$func = $this->routes[$method][$path]['action'];

		return $func();
	}
}