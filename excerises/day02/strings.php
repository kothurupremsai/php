<?php
 $firstname = 'sai';
 echo  'Length is', strlen($fisrtname),PHP_EOL;
 echo 'position of the first "i" is:',strpos('$firstname','i'),PHP_EOL;
 echo 'Char at position  3 is:', $firstname[2];
 $values_str='This is premsai';
 $value_array =explode(' ',$values_str);
 echo PHP_EOL;
 print_r($value_array);//this is an array
 echo PHP_EOL,$value_array[0],$value_array[1];