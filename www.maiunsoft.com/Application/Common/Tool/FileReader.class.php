<?php

namespace Common\Tool;

class FileReader{
	public static function get_contents($file)
	{
		return file_get_contents($file);
	}
}