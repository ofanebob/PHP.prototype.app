<?php
require_once dirname(__FILE__).'/lib.php';

$city = isset($_GET['city']) ? $_GET['city'] : null;

if($city == null)
{
	header('Location:'.$_SERVER['PHP_SELF'].'?city=Kuningan, Jawa Barat');
}

try
{
	$rss = NewsGoogleFeed::loadRss('"'.$city.'"');

	include(BASEDIR.'/var/news.php');
	include(TEMPLATEHTML);
}
catch(NewsGoogleFeedException $e)
{
 	echo $e->getMessage();
}
?>