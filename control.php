<?php
/*
	control.php is part of the PHP teletext viewer project, codenamed 'Non Editing Teletext Viewer' or NETV (NET-v)
	Control Code Functions
	Nathan Dane, 2018
*/
/*
	array findControl(str LINE);
	Returns an array with all the control codes seperated from the raw text
*/
function findControl($line)
{
	$flag=false;
	$codes=array();
	$line=str_replace("\r\n", '', $line);
	$line=str_split($line);
	foreach($line as $key => $char)
	{
		if ($flag==true)
		{
			array_push($codes,array($char,($key-1)));
			unset($line[$key]);
		}
		if ($char=="")$flag=true;	// If there's an ESC, this is a control code
		else $flag=false;				// which we'll get next time around
	}
	$line=implode($line);
	return array($codes,$line);
}
/*
	array groupControl(array CONTROL CODES);
	Returns an array containing the control codes, with those close to each-other grouped to be processed together
*/
function groupControl($codes)
{
	$last=100;
	$first=false;
	$group=array();
	$groupedc=array();
	foreach($codes as $key => $code)
	{
		$pos=$code[1];
		if(($last+=2)==$pos)
		{
			if ($first==false)
			{
				array_push($group,$codes[$key-1]);
				array_pop($groupedc);
				$first=true;
			}
			array_push($group,$codes[$key]);
		}
		else
		{
			$first=false;
			if (!empty($group))
				array_push($groupedc,$group);
			array_push($groupedc,$code);
		}
		$last=$pos;
	}
	return $groupedc;
	
}

function codeControl($code)
{
	switch($code)
	{
		case "A" : ;
		return "1";
		case "B" : ;
		return "2";
		case "C" : ;
		return "3";
		case "D" : ;
		return "4";
		case "E" : ;
		return "5";
		case "F" : ;
		return "6";
		case "G" : ;
		return "7";
		case "H" : ;
		return "0";
		case "I" : ;
		return "";
		case "J" : ;
		return "";
		case "K" : ;
		return "";
		case "L" : ;
		return "";
		case "M" : ;
		return "dh";
		case "N" : ;
		return "";
		case "O" : ;
		return "";
		case "P" : ;
		return "";
		case "Q" : ;
		return array("1",true);
		case "R" : ;
		return array("2",true);
		case "S" : ;
		return array("3",true);
		case "T" : ;
		return array("4",true);
		case "U" : ;
		return array("5",true);
		case "V" : ;
		return array("6",true);
		case "W" : ;
		return array("7",true);
		case "X" : ;
		return array("0",true);
		case "Y" : ;
		return "";
		case "Z" : ;
		return array("contiguous");
		case "[" : ;
		return "";
		case "]" : ;
		return "";
		case "\\" : ;
		return "";
		case "^" : ;
		return "";
		case "_" : ;
		return "";
		case "`" : ;
		return "";
	}
}