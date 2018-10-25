<?php 
if (isset($_GET['urli']))
{
	if (isset($_GET['urli'])) 
	{
		$urli=($_GET['urli']);
	}	
	if (isset($_GET['year'])) 
	{
		$year=($_GET['year']);
	}	
	if (isset($_GET['census'])) 
	{
		$census=($_GET['census']);
	}	
	if (isset($_GET['format'])) 
	{
		$format=($_GET['format']);
	}		

	echo (file_get_contents($urli.'?year='.$year.'&census='.$census.'&'.$format));
}

if (isset($_GET['haexml']))
{
	if (isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	header('Content-Type: text/xml');
	$xmltiedosto = (file_get_contents('http://hatikka.fi/?page=view&id='.$id.'&source=2&xsl=false'));
	echo $xmltiedosto;
}

if (isset($_GET['urll']))
{
	if (isset($_GET['urll'])) 
	{
		$urll=($_GET['urll']);
	}
	
	echo (file_get_contents($urll));
}
?>