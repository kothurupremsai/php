<?php
echo 'Hello',PHP_EOL;
echo 'Premsai',PHP_EOL;
$str = "isi";
echo $str;
echo 'content of variable is:',$str,PHP_EOL;
$str2=$str .   'How are you ?';
echo $str2,PHP_EOL;
$firstname='Kothuru';
$sentence="My name is $firstname, and I like PHP";
echo $sentence,PHP_EOL;
$sentence2 ='my name is $firstname, and i like php';
echo $sentence,PHP_EOL;
$t=array(1,2,3);//array declaration
echo "second value is{$t[1]}";


define('AGE',21);//Integer Constant
echo AGE,PHP_EOL;
define('COMPANY','Isi');//String Constant
echo COMPANY,PHP_EOL;
define('TWICE_AGE', AGE * 2);
echo TWICE_AGE , PHP_EOL;
define('FULL_COMPANY_NAME',COMPANY.'Inc');//Concatination
echo TWICE_AGE,' ',FULL_COMPANY_NAME;//use it

const AGE2 = 22;//no need of brackets
echo AGE2,PHP_EOL;
const Company2='ISISI';
echo Company2;


if(isset($str))
{
    echo PHP_EOL,'Variable $str exists';
}
else{
    echo PHP_EOL,'Variable $str does not exists';
}
if(defined(COMPANY))
{
    echo PHP_EOL,'Constant Company Exists';

}
else{
    echo PHP_EOL,'constant company does not exists';
}