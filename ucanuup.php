<?php
$str = file_get_contents('http://106.75.28.160/UCloud.txt');

if(version_compare(PHP_VERSION, '5.0.0', '>=')){
	$i=0;
	str_replace('UCanUup','',$str,$i);
}else{
	$str = explode('UCanUup',$str);
	$i = count($str)-1;
}
echo $i;
?>