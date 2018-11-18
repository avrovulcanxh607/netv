<?php
/*
	render.php is part of the PHP teletext viewer project, codenamed 'Non Editing Teletext Viewer' or NETV (NET-v)
	Display Functions
	Nathan Dane, 2018
*/
function lineRender($line,$control,$mpp)
{
	$lastesc=strpos($line,"\e");	// Find the first control code
	$lastesc++;
	$i=0;
	$dh="";	// Reset the double height flag
	$end="";	// Nothing to close yet
	$out="";	// Prepare the output buffer
	foreach ($control as $key => $code)
	{
		//print_r($code);
		if (is_array($code[0]))
		{
			$out.="group";	
			// If its complicated, just don't bother for now while we sort other stuff out @todo
			
		}
		else
		{
			$control=codeControl($code[0]);	// This'll give us the html version of the code we need.
			if (is_array($control))
			{
				if ($i > 0) $end="</span>";	// If we've already done something, make sure to close it
				$thisesc=strpos($line,"\e",$lastesc);
				if ($thisesc === false) $thisesc=40;	// no more control codes, go to the end of the line
				$out.="$end".'<span class="f'."$control[0]$dh".'"> ';	// Add the control code 
				$wait=substr($line,$lastesc,($thisesc-$lastesc));	// and text to the output 'buffer'. NO, WAIT!!!
				if ($control[1] === true)	// Is this a graphics code? 
					$out.=contiguousGraphics($wait,0);	// Convert the text to graphics
					// Need to add option for seperated graphics here @todo
					// Also if this isn't graphics, nothing will get output. 
					// Not sure if this is a problem yet
				$lastesc=$thisesc;
				$lastesc++;	// Add one so that it doesn't include the esc
				$i++;
				//$out.= "got called";
			}
			else
			{
				if ($i > 0) $end="</span>";	// If we've already done something, make sure to close it
				$thisesc=strpos($line,"\e",$lastesc);
				if ($thisesc === false) $thisesc=40;	// no more control codes, go to the end of the line
				if ($control!="dh") $start="f";
				$out.="$end".'<span class="'."$start$control$dh".'"> ';	// Add the control code 
				$out.=substr($line,$lastesc,($thisesc-$lastesc));	// and text to the output 'buffer'.
				$lastesc=$thisesc;
				$lastesc++;	// Add one so that it doesn't include the esc
				$i++;
				//$out.= "got called";
			}
			if ($control=="dh") $dh=" dh";
		}
	}
	$out=str_replace("`",'—',$out);	// Make dashes look right
	return $out;
}