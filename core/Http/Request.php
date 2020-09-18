<?php

namespace OCMS\Http;

/**
 * Class Request
 */
class Request
{
	/**
	 * @return string
	 */
	static function getMethod(): string
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	/**
	 * @return string
	 */
	static function getRoute(): string
	{
		return $_SERVER['REQUEST_URI'];
	}
}