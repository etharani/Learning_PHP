<?php
function sum(){
$x=10;
$y=20;
echo $x+$y;
echo"<br>";
}

sum();
sum();

function sum1($a,$b){
    echo $a+$b;
}
sum1(25,41);
echo"<br>";
function sum2($c=5,$d=6){
    echo $c+$d;
    echo"<br>";
}
sum2();
sum2(20);
sum2(15,23);
echo"<br>";
// function sum3($e=5,$f){
//     echo $e+$f;
// }
// sum3();
// sum3(20);
function sum4($s,$t=6){
    echo $s+$t;
    echo"<br>";
}
sum4(20);
sum4(15,23);
echo"<br>";

function sum5(){
    $r=7;
    $q=8;
    return($r+$q);
}
$abc=sum5();
echo $abc;
echo"<br>";

function sum6($o,$p){
return($o+$p);
}
$ab=sum6(50,35);
echo $ab;
echo"<br>";
$abcd=sum6(30,56);
echo $abcd;
echo"<br>";

function colo1 ($clor){
    echo"Tharani<br>";
    echo"Tharani<br>";
    echo"Tharani<br>";
    echo'<hr color="'.$clor.'">';
}
    colo1("red");
    colo1("blue");
    colo1("green");
?>
