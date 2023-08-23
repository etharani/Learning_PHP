<?PHP 
$a=Array(10,20,30);
print_r($a);
echo"<br>";
echo $a[0],"<br>";
echo $a[1],"<br>";
echo $a[2],"<br>";
echo"<br>";
$b=Array("Animal-1"=>"Cat","Animal-2"=>"Cow","Animal-3"=>"Tiger");
print_r($b);
echo"<br>";
echo $b["Animal-1"],"<br>";
echo $b["Animal-2"],"<br>";
echo $b["Animal-3"],"<br>";
echo"<br>";
$c=[1,2,3];
print_r($c);
echo"<br>";
echo $c[0],"<br>";
echo $c[1],"<br>";
echo $c[2],"<br>";
echo"<br>";
$d=["Animal-1"=>"Cat","Animal-2"=>"Cow","Animal-3"=>"Tiger"];
print_r($d);
echo"<br>";
echo $d["Animal-1"],"<br>";
echo $d["Animal-2"],"<br>";
echo $d["Animal-3"],"<br>";
echo"<br>";
$e=[[1,2,3],[4,5,6],[7,8,9]];
echo'<pre>';
print_r($e);
echo'</pre>';
echo"<br>";
$f=[
    ["Maths"=>60,"science"=>65,"English"=>87],
    ["Maths"=>90,"science"=>87,"English"=>88],
    ["Maths"=>80,"science"=>85,"English"=>97]];
echo'<pre>';
print_r($f);
echo'</pre>';

?>