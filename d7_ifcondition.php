<?php
if(true){
    echo"if condition used -  true";
}
echo"<br>";
if(1){
    echo"if condition used -  1";
}
echo"<br>";
if(5){
    echo"if condition used -  5";
}
echo"<br>";
if(-7){
    echo"if condition used -  -7";
}
echo"<br>";
$a=5;
if($a-4){
    echo"if condition used -  a-4";
}
echo"<br>";
echo "---------------------";
echo"<br>";
$a=2;
$a==4;
if(1){
  echo"a is five";
}
if(0){
    echo" a is not five";
}
echo"<br>";
echo "---------------------";
echo"<br>";
echo (boolean)(1);
echo"<br>";
echo(bool)(1);
echo"<br>";
var_dump((bool) ""); echo"<br>";//false
var_dump((bool) "0");echo"<br>";//false
var_dump((bool) 1);echo"<br>"; //true
var_dump((bool)-2);echo"<br>";//true
var_dump((bool) "foo");echo"<br>"; //true
var_dump((bool) 2.3e5);echo"<br>";//true
var_dump((bool) array(12));echo"<br>"; //true
var_dump((bool) array());echo"<br>";//true
var_dump((bool) "false");echo"<br>"; // (true)

?>