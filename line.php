<?php
/*
	line.php is part of the PHP teletext viewer project, codenamed 'Non Editing Teletext Viewer' or NETV (NET-v)
	This looks after all page lines.
	Nathan Dane, 2018
*/
include "control.php";
/*
	array formatLine(str LINE);
	Returns an array containing the line's number, control codes and raw text
*/
function formatLine($rawline)
{
	$OL=substr($rawline,3);
	$OL=substr($OL, 0, strpos($OL, ","));
	if ($OL >=1 && $OL <=24 )
		fwrite(STDERR, "Line $OL in range\n");
	else
	{
		fwrite(STDERR, "Line $OL out of range!\n");
		return;
	}
	$rawline=substr($rawline, strpos($rawline, ",") + 1);
	$rawline=substr($rawline, strpos($rawline, ",") + 1);
	$rawline=trim($rawline);
	$rawline=rtrim($rawline);
	$rawline=str_pad($rawline, 40);
	$control=findControl($rawline);
	$rawline=$control[1];
	if (strlen($rawline)>40)
	{
		fwrite(STDERR, "Line $OL too long! ");
		fwrite(STDERR, strlen($rawline)."\n");
		return;
	}
	$control[0]=groupControl($control[0]);
	$rawline=str_replace("","\e",$rawline);
	return array($OL,$control[0],$rawline);
}

function carouselLine($rawline)
{
	$CT=substr($rawline,3);
	$CT=substr($CT,0,strpos($CT,","));
	$CorT=substr($rawline,3);
	$CorT=substr($CorT,(strpos($CorT,",")+1));
	if ($CorT=='C')
		$CT=$CT*1.5;	// This is rough, but I'm pretty sure a cycle usually takes longer than a second.
	return $CT;
}