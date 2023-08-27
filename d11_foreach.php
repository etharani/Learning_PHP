<?php
$y=[1,2,3,4];
echo 'foreach method','<br>';
foreach($y as $t){
    echo $t,'<br>';
}
echo'<br>';
$a=[
    "Animal:1"=>"Cat",
    "Animal:2"=>"Cow",
    "Animal:3"=>"Tiger"];
    foreach($a as $t){
        echo $t,'<br>';
    }
echo'<br>';
foreach($a as $r=>$q){
    echo $r,'-'.$q,'<br>';
}
echo'<br>';
echo'<table border="1">';
echo'<tr>';
foreach($a as $r=>$q){
    echo '<td style="color:blue">'.$r,'</td>';
    echo '<td>'.$q,'</td>';
echo'</tr>';
}
?>