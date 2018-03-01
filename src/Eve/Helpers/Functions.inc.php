<?php

if (!function_exists('dump')) {
	function dump()
	{
		$vars = func_get_args();
		echo '<pre>';
		var_dump(count($vars) > 1 ? $vars : $vars[0]);
		exit('</pre>');
	}
}

if (!function_exists('redirect')) {
	function redirect($url, $permanent = false)
	{
		if (headers_sent() === false) {
			header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
			exit;
		}
	}
}

if (!function_exists('env')) {
	function env($key, $fallback = null)
	{
		return getenv($key) ?: $fallback;
	}
}

if (!function_exists('startsWith')) {
	function startsWith($haystack, $needle)
	{
		$length = strlen($needle);

		return (substr($haystack, 0, $length) === $needle);
	}
}

if (!function_exists('endsWith')) {
	function endsWith($haystack, $needle)
	{
		$length = strlen($needle);

		return $length === 0 || (substr($haystack, -$length) === $needle);
	}
}