<?php
const STR = '.....Belle marquise , vos beaux yeux , d\'amour , me font mourir !-----';
echo 'The String is:',STR;
echo PHP_EOL;
echo 'The Length is:',strlen(STR),PHP_EOL;
echo "First Char:", STR[0],PHP_EOL;
echo "9TH char:",STR[8],PHP_EOL;
echo "Last char:",STR[strlen(STR)-1],PHP_EOL;
echo "Replacement 1:",str_replace(', ' , '-' , STR),PHP_EOL;
echo "Replacement 2:",str_replace('marquise','duchesse',STR),PHP_EOL;
echo "Replacement case insenstively:",str_replace('Marquise','duchesse',STR),PHP_EOL;
echo "Trim:",trim(STR,'.'),PHP_EOL;
echo "RTrim:",rtrim(STR,'-'),PHP_EOL;
echo "LTrim:",ltrim(STR,'.'),PHP_EOL;
echo "Get The Type:",gettype(STR),PHP_EOL;
echo "Php Type Cast:",gettype((string)1),PHP_EOL;
$url = 'http://www.isi-mtl.com/home.php';
echo "Url is:",$url,PHP_EOL;
echo "Position Of Substring Com:",strpos($url,'com'),PHP_EOL;
echo "Position of Substring Org:",$g=strpos($url,'org'),PHP_EOL;
echo "Type of It:",gettype($g),PHP_EOL;
if (false !== strpos($url, 'com')) {
    echo "Substring com is present in the URL.",PHP_EOL;
}
if (false !== strpos($url, 'com')) {
    echo "Substring org is absent in the URL.",PHP_EOL;
}
echo "14 Characters starting at position 5:",substr(STR,5,14),PHP_EOL;
echo "LowerCase:",strtolower(STR),PHP_EOL;
echo "Uppercase:",strtoupper(STR),PHP_EOL;
echo "Capitalized Version:",ucfirst($url),PHP_EOL;
echo "Thank You !",PHP_EOL;