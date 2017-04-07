<?php

namespace Common\Tool;

class Converter{


	/**
	 * 10进制转换为32进制
	 * @param  [type] $n10
	 * @return [type]
	 */
	public static function n10_n32($n10) {
		$base = '0123456789ABCDEFGHIJKLMNOPQRSTUVW';  
	    $result = '';  
	  	
	    do {  
	        $result = $base[$n10 % 32] . $result;  
	        $n10 = intval($n10 / 32); 
	    } while ($n10 != 0);  
	  
	    return $result;  
	}

	/**
	 * 32进制转换为10进制
	 * @param  [type] $n32
	 * @return [type]
	 */
	public static function n32_n10($n32) {
		$base_map = array (  
	    '0' => 0,  
	    '1' => 1,  
	    '2' => 2,  
	    '3' => 3,  
	    '4' => 4,  
	    '5' => 5,  
	    '6' => 6,  
	    '7' => 7,  
	    '8' => 8,  
	    '9' => 9,      
	    'A' => 10,  
	    'B' => 11,  
	    'C' => 12,  
	    'D' => 13,  
	    'E' => 14,  
	    'F' => 15,  
	    'G' => 16,  
	    'H' => 17,  
	    'I' => 18,  
	    'J' => 19,  
	    'K' => 20,  
	    'L' => 21,  
	    'M' => 22,  
	    'N' => 23,  
	    'O' => 24,  
	    'P' => 25,  
	    'Q' => 26,  
	    'R' => 27,  
	    'S' => 28,  
	    'T' => 29,  
	    'U' => 30,  
	    'V' => 31,  
	    'W' => 32 
	    );  
	    $result = 0;  
	    $len = strlen($n32);  
	  
	    for ($n = 0; $n < $len; $n++) {  
	        $result *= 32;  
	        $result += $base_map[$n32{$n}];  
	    }  
	  
	    return $result;  
	}
}