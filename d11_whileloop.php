<?php 
$a=1;
while($a<6){
     echo $a,'<br>';
     $a++;
}
echo'<br>';

$a=1;
while($a<6){
    $b=1;
    while($b<4){
        echo $b.'b';
        $b++;
    }
     echo $a.'a','<br>';
     $a++;
}
echo'<br>';

$x=[10,20,30,40];
echo 'count:'.count($x),'<br>';
$i=0;
while($i< count($x)){
    echo $x[$i],'<br>';
    $i++;
}

echo'<br>';
$a=1;
echo '<table border="1" width="50%">';
while($a<13){
    echo'<tr>';
    $b=1;
    while($b<13){
        $c=$a*$b;
        if($c%2==0){
            echo '<td style="color:red">'.$c.'</td>';
        }
        else{
            echo '<td style="color:blue">'.$c.'</td>';
        }
        $b++;
    }
    $a++;
    echo '</tr>';
} 
echo'</table>';
echo'<br>';
?>
<!DOCTYPE html>
<html>
<head>
<title>start work html</title>
</head>
<body>
 <table border="1" width="50%">
 <?php
    $a=1;
    while($a<13){ ?>
 <tr>
 <?php   
    $b=1;
    while($b<13){
         $c=$a*$b;
         if($c%2==0){ ?>
<td style="color:green ;background:yellow"> <?php echo$c; ?> </td> 
 <?php 
        }
        else{ ?>
<td style="color:purple"> <?php echo$c; ?> </td>
  <?php
        }
        $b++;
    }
    $a++;  ?>
</tr>
  <?php
         } ?>
</table>
</body>
</html>
