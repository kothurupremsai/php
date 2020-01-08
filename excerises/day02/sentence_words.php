<?php
if($argc >=2)
{
$sentence=$argv[1];
$words = explode(' ', $sentence);
$values_str=$words;
echo PHP_EOL;
print_r($words);
for($i=0;$i<count($words);$i++)
{
    echo "Word #$i is : {$words[$i]}";
    echo PHP_EOL;
}
}
else{
    echo "Invalid Arguments count:At least one argument expected.";
}
echo "Thank You !";