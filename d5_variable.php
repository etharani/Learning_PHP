<!DOCTYPE html>
<html>
<head>
<title>start work html</title>
</head>
<body>
<?php
$name="welcome";
echo $name;
$$name="guys";
echo"<br>";
echo $$name;
echo"<br>";
echo $welcome;
echo"<br>";
$$$name="morning";
echo $$$name;
echo"<br>";
echo $guys;
echo"<br>";
echo $$welcome;
echo"<br>";
echo"---------------";
echo"<br>";
$a=true;
var_dump($a);
settype($a,"integer");
echo"<br>";
var_dump($a);
echo"<br>";
echo"---------------";
$b="Hi";
echo"<br>";
echo isset($b);
$bl=isset($b);
echo"<br>";
var_dump($bl);
echo"<br>";
var_dump( empty($b));
echo"<br>";
echo"---------------";
echo"<br>";
var_dump(empty(false));
echo"<br>";
var_dump(empty(""));
echo"<br>";
var_dump(empty(null));
echo"<br>";
var_dump(empty(0));
echo"<br>";
var_dump(empty([]));
echo"<br>";
echo"---------------";
echo"<br>";
unset($b);
var_dump(isset($b));
echo"<br>";
echo empty($b);
echo"<br>";
echo"---------------";
echo"<br>";
$x=10;
var_dump($x);
echo"<br>";
echo is_int($x);
echo"<br>";
settype($x,"string");
var_dump($x);
echo"<br>";
echo is_string($x);
?>
</body>
</html>