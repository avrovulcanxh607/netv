<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ceefax</title>
<link rel="shortcut icon" type="image/ico" href="/ceefax/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="./css/teletext.css" title="Default Style">
<link rel="alternative stylesheet" type="text/css" href="./css/teletext-noscanlines.css" title="No Scanlines">
<script type="text/javascript" src="./css/cssswitch.js"></script>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
	h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h + ":" + m + "/" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body onload="startTime()">
<?php
/*
	netv.php is part of the PHP teletext viewer project, codenamed 'Non Editing Teletext Viewer' or NETV (NET-v)
	Main initial run script
	Nathan Dane, 2018
*/
include "render.php";
include "graphics.php";
include "line.php";

fwrite(STDERR, "Welcome to NETV\n");
$mpp=100;
$mpp=$_GET['mpp'];
$ss=$_GET['ss'];

echo '<body onload="set_style_from_cookie()"><pre><div class="subpage" id="0001">   <span class="pgnum">P'."$mpp".'</span> <span class="f7 b0 nx">CEEFAX 1 '."$mpp".' Mon 03 Jan </span><span class="f3 b0 nx"><span id="txt"></span></span><br>';

$page=getPage($mpp,$ss);
$last=0;
foreach ($page[0] as $line)
{
	$line=formatLine($line);
	if ($line[0]-$last!=1) echo "\r\n";	// If there's a line missing, add it here to make the page look right
	echo lineRender($line[2],$line[1],$line[0]);
	echo "</span>\r\n";
	$last=$line[0];
}

function getPage($mpp="100",$ss="0")
{
	$page=file("AUTO$mpp.tti");
	$spages=array();
	foreach ($page as $line)
	{
		if(!strncmp($line,"CT,",3))	// Get the cycle time for carousel pages
		{
			$time=carouselLine($line);
		}
		elseif(!strncmp($line,"SC,",3))	// Get the Subpage
		{
			$sc=substr($line,3);
			array_push($spages,$sc);
			${$sc}=array();
		}
		elseif(!strncmp($line,"OL,",3) && strncmp($line,"OL,0,",5))
		{
			$line2=substr($line,3);
			$ln=strstr($line2,',',true);
			${$sc}[$ln]=$line;
		}
	}
	$sc=$spages[$ss];
	ksort(${$sc});	// Make sure the page is in order!
	$pages=array_values(array_slice($spages,-1))[0];
	
	return array(${$sc},$pages,$time);
}
?>
</div>