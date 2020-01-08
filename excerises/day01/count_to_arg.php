<?php
$max=10;
if($argc >1)
{
	$max=$argv[1];
}
for($i=0;$i<=$max;$i++){
	echo $i;
}