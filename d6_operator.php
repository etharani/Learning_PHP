<!DOCTYPE html>
<html>
<head>
<title>operator</title>
</head>
<body>
<?php
$x=8;
$y=2;
echo "x+y=". ($x+$y).'<br>';
echo "x-y =". ($x-$y). ' <br>';
echo "x*y =". ($x*$y). '<br>'; 
echo "x%y =". ($x%$y). '<br>';
echo "x**y =" . ($x**$y). '<br>';

$x+=20;
echo $x, '<br>';
$x-=5;
echo $x,'<br>';
$x/=5;
echo $x,' <br>';
$x*=2;
echo $x,'<br>'; 
$x%=4;
echo $x, '<br>';
echo '<br>';
echo '$x==$y','<br>';
echo "$x==$y";
var_dump ($x==$y);
echo"<br>";
echo '$x!=$y', '<br>';
echo "$x!=$y";
var_dump($x!=$y);
echo"<br>";
echo '$x<=$y', '<br>';
var_dump($x<=$y);
echo"<br>";
echo '$x>=$y', '<br>';
var_dump($x>=$y);
echo"<br>";
echo '$x<$y', '<br>';
var_dump($x<$y);
echo"<br>";
echo '$x>$y', '<br>';
var_dump($x>$y); 
echo"<br>";
echo '$x===$y', '<br>';
var_dump($x===$y);
echo"<br>";
echo '$x!==$y', '<br>';
var_dump($x!==$y);
echo "<br>";
echo "--------------------------------";
echo "<br>";
$a=10;
$b=10;
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo"<br>";
echo "--------------------------------";
echo "<br>";
$c=5;
$d="5";
var_dump($c==$d);
echo "<br>";
var_dump($c===$d);

?>
</body>
</html>