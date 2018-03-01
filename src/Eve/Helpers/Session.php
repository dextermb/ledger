<?php
namespace Eve\Helpers;

/**
 * Class Session
 *
 * @property $access_token
 * @property $refresh_token
 * @property $valid_until
 * @property $self
 *
 * @package Eve\Helpers
 */
class Session
{
	private static $instance;

	private $in_session;

	public static function init()
	{
		if (self::$instance === null) {
			self::$instance = new self;
			self::$instance->start();
		}

		return self::$instance;
	}

	public function __get(string $key)
	{
		if (isset($_SESSION[ $key ])) {
			return $_SESSION[ $key ];
		}

		return null;
	}

	public function __set(string $key, $value)
	{
		$_SESSION[ $key ] = $value;
	}

	public function __isset(string $key)
	{
		return isset($_SESSION[ $key ]);
	}

	public function __unset(string $key)
	{
		unset($_SESSION[ $key ]);
	}

	public function start()
	{

		if (!$this->in_session) {
			$this->in_session = @session_start();
		}

		return $this->in_session;
	}

	public function destroy()
	{
		if ($this->in_session) {
			$this->in_session = !session_destroy();
			unset($_SESSION);

			return $this->in_session;
		}

		return false;
	}
}