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
class Session implements \ArrayAccess
{
	private static $instance;
	private        $in_session;

	public static function init()
	{
		if (self::$instance === null) {
			self::$instance = new self;
			self::$instance->start();
		}

		return self::$instance;
	}

	/**
	 * @return array
	 */
	public function all()
	{
		return $_SESSION;
	}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public function __get(string $key)
	{
		if (isset($_SESSION[ $key ])) {
			return $_SESSION[ $key ];
		}

		return null;
	}

	/**
	 * @param string $key
	 * @param mixed  $value
	 */
	public function __set(string $key, $value)
	{
		$_SESSION[ $key ] = $value;
	}

	/**
	 * @param string $key
	 * @return bool
	 */
	public function __isset(string $key)
	{
		return isset($_SESSION[ $key ]);
	}

	/**
	 * @param string $key
	 */
	public function __unset(string $key)
	{
		unset($_SESSION[ $key ]);
	}

	/**
	 * @return bool
	 */
	public function start()
	{

		if (!$this->in_session) {
			$this->in_session = @session_start();
		}

		return $this->in_session;
	}

	/**
	 * @return bool
	 */
	public function destroy()
	{
		if ($this->in_session) {
			$this->in_session = !session_destroy();
			unset($_SESSION);

			return $this->in_session;
		}

		return false;
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value)
	{
		$_SESSION[ $offset ] = $value;
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists($offset)
	{
		return isset($_SESSION[ $offset ]);
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		unset($_SESSION[ $offset ]);
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	public function offsetGet($offset)
	{
		return isset($_SESSION[ $offset ]) ? $_SESSION[ $offset ] : null;
	}
}