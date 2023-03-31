<?php

echo"Using while loop to implement the multiplication
table of 5";
//CODE
$num =1;
while($num<=12){
    echo"<br>";
    echo" 5"."*"."$num"."=".($num*5);
    $num++;
}


echo"<br>";
echo"Using do while loop to implement the multiplication
table of 5";
//CODE
$num1 =1;
do{
    echo"<br>";
   echo" 5"."*"."$num1"."=".($num1*5);
   $num1 ++;
}
while($num1<=12)
;

 
echo"<br>";
echo"Use the for loop to didplay the first hundere even numbers";
//CODE
for($even=0; $even<=100; $even=$even + 2){
    echo"<br>";
    echo $even;
}

?>
