<?php
namespace Eve\Helpers;

use PDO;
use PDOException;

class DB
{
	private static $instance = null;

	public static function init()
	{
		if (self::$instance === null) {
			try {
				self::$instance = new PDO(
					self::buildConnectionString(),
					env('DB_USER', 'docker'), env('DB_USER', 'secret')
				);

				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
			} catch (PDOException $e) {
				throw $e;
			}
		}

		return self::$instance;
	}

	private static function buildConnectionString()
	{
		$url = 'mysql:';

		$url .= 'host=' . env('DB_HOST', 'localhost') . ';';
		$url .= 'dbname=' . env('DB_SCHEMA', 'ledger') . ';';
		$url .= 'charset=' . env('DB_CHARSET', 'utf8');

		return $url;
	}
}