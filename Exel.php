<?php

namespace socialist\exelreader;



/**
* 
*/
class Exel
{
	private function __construct(){}

	public static function read($file)
	{
		$ext = self::getExt($file);

		$className = "\\socialist\\exelreader\\{$ext}\\Reader";

		if(!file_exists(dirname(__FILE__) . "/{$ext}/Reader.php")) {
			return null;
		}

		return new $className($file);
	}

	private static function getExt($file)
	{
		return strToLower(substr($file, strripos($file, '.') + 1));
	}
}