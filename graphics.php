<?php
/*
	graphics.php is part of the PHP teletext viewer project, codenamed 'Non Editing Teletext Viewer' or NETV (NET-v)
	Here we convert text to graphics
	Nathan Dane, 2018
*/
function contiguousGraphics($rawline,$start,$end=40)
{
	$line=substr($rawline,$start,$end);
	$line=str_split($line);
	foreach($line as $key => $char)
	{
		switch ($char)
		{
		case "!" : ;
			$char="";
			break;
		case "\"" : ;
			$char="";
			break;
		case "#" : ;
			$char="";
			break;
		case "$" : ;
			$char="";
			break;
		case "%" : ;
			$char="";
			break;
		case "&" : ;
			$char="";
			break;
		case "'" : ;
			$char="";
			break;
		case "(" : ;
			$char="";
			break;
		case ")" : ;
			$char="";
			break;
		case "*" : ;
			$char="";
			break;
		case "+" : ;
			$char="";
			break;
		case "," : ;
			$char="";
			break;
		case "-" : ;
			$char="";
			break;
		case "." : ;
			$char="";
			break;
		case "/" : ;
			$char="";
			break;
		case "0" : ;
			$char="";
			break;
		case "1" : ;
			$char="";
			break;
		case "2" : ;
			$char="";
			break;
		case "3" : ;
			$char="";
			break;
		case "4" : ;
			$char="";
			break;
		case "5" : ;
			$char="";
			break;
		case "6" : ;
			$char="";
			break;
		case "7" : ;
			$char="";
			break;
		case "8" : ;
			$char="";
			break;
		case "9" : ;
			$char="";
			break;
		case ":" : ;
			$char="";
			break;
		case ";" : ;
			$char="";
			break;
		case "<" : ;
			$char="";
			break;
		case "+" : ;
			$char="";
			break;
		case ">" : ;
			$char="";
			break;
		case "?" : ;
			$char="";
			break;
		case "`" : ;
			$char="";
			break;
		case "a" : ;
			$char="";
			break;
		case "b" : ;
			$char="";
			break;
		case "c" : ;
			$char="";
			break;
		case "d" : ;
			$char="";
			break;
		case "e" : ;
			$char="";
			break;
		case "f" : ;
			$char="";
			break;
		case "g" : ;
			$char="";
			break;
		case "h" : ;
			$char="";
			break;
		case "i" : ;
			$char="";
			break;
		case "j" : ;
			$char="";
			break;
		case "k" : ;
			$char="";
			break;
		case "l" : ;
			$char="";
			break;
		case "m" : ;
			$char="";
			break;
		case "n" : ;
			$char="";
			break;
		case "o" : ;
			$char="";
			break;
		case "p" : ;
			$char="";
			break;
		case "q" : ;
			$char="";
			break;
		case "r" : ;
			$char="";
			break;
		case "s" : ;
			$char="";
			break;
		case "t" : ;
			$char="";
			break;
		case "u" : ;
			$char="";
			break;
		case "v" : ;
			$char="";
			break;
		case "w" : ;
			$char="";
			break;
		case "x" : ;
			$char="";
			break;
		case "y" : ;
			$char="";
			break;
		case "z" : ;
			$char="";
			break;
		case "{" : ;
			$char="";
			break;
		case "|" : ;
			$char="";
			break;
		case "}" : ;
			$char="";
			break;
		case "~" : ;
			$char="";
			break;
		case "" : ;
			$char="";
			break;
		}
		$newline.=$char;
	}
	$line=implode($line);
	return substr_replace($rawline,$newline,$start,$end);
}

function seperatedGraphics($rawline,$start,$end=40)
{
	$line=substr($rawline,$start,$end);
	$line=str_split($line);
	foreach($line as $key => $char)
	{
		switch ($char)
		{
		case "!" : ;
			$char="";
			break;
		case "\"" : ;
			$char="";
			break;
		case "#" : ;
			$char="";
			break;
		case "$" : ;
			$char="";
			break;
		case "%" : ;
			$char="";
			break;
		case "&" : ;
			$char="";
			break;
		case "'" : ;
			$char="";
			break;
		case "(" : ;
			$char="";
			break;
		case ")" : ;
			$char="";
			break;
		case "*" : ;
			$char="";
			break;
		case "+" : ;
			$char="";
			break;
		case "," : ;
			$char="";
			break;
		case "-" : ;
			$char="";
			break;
		case "." : ;
			$char="";
			break;
		case "/" : ;
			$char="";
			break;
		case "0" : ;
			$char="";
			break;
		case "1" : ;
			$char="";
			break;
		case "2" : ;
			$char="";
			break;
		case "3" : ;
			$char="";
			break;
		case "4" : ;
			$char="";
			break;
		case "5" : ;
			$char="";
			break;
		case "6" : ;
			$char="";
			break;
		case "7" : ;
			$char="";
			break;
		case "8" : ;
			$char="";
			break;
		case "9" : ;
			$char="";
			break;
		case ":" : ;
			$char="";
			break;
		case ";" : ;
			$char="";
			break;
		case "<" : ;
			$char="";
			break;
		case "+" : ;
			$char="";
			break;
		case ">" : ;
			$char="";
			break;
		case "?" : ;
			$char="";
			break;
		case "`" : ;
			$char="";
			break;
		case "a" : ;
			$char="";
			break;
		case "b" : ;
			$char="";
			break;
		case "c" : ;
			$char="";
			break;
		case "d" : ;
			$char="";
			break;
		case "e" : ;
			$char="";
			break;
		case "f" : ;
			$char="";
			break;
		case "g" : ;
			$char="";
			break;
		case "h" : ;
			$char="";
			break;
		case "i" : ;
			$char="";
			break;
		case "j" : ;
			$char="";
			break;
		case "k" : ;
			$char="";
			break;
		case "l" : ;
			$char="";
			break;
		case "m" : ;
			$char="";
			break;
		case "n" : ;
			$char="";
			break;
		case "o" : ;
			$char="";
			break;
		case "p" : ;
			$char="";
			break;
		case "q" : ;
			$char="";
			break;
		case "r" : ;
			$char="";
			break;
		case "s" : ;
			$char="";
			break;
		case "t" : ;
			$char="";
			break;
		case "u" : ;
			$char="";
			break;
		case "v" : ;
			$char="";
			break;
		case "w" : ;
			$char="";
			break;
		case "x" : ;
			$char="";
			break;
		case "y" : ;
			$char="";
			break;
		case "z" : ;
			$char="";
			break;
		case "{" : ;
			$char="";
			break;
		case "|" : ;
			$char="";
			break;
		case "}" : ;
			$char="";
			break;
		case "~" : ;
			$char="";
			break;
		case "" : ;
			$char="";
			break;
		}
		$newline.=$char;
	}
	$line=implode($line);
	return substr_replace($rawline,$newline,$start,$end);
}