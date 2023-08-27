<?php
for($a=1;$a<6;$a++){
     echo $a,'<br>';
}
echo'<br>';

for($a=1;$a<6;$a++){
    for($b=1;$b<4;$b++){
        echo $b.'b';
    }
     echo $a.'a','<br>';
}
echo'<br>';

$y=[10,20,30,40];
echo 'count:'.count($y),'<br>';
for($j=0;$j< count($y);$j++){
    echo $y[$j],'<br>';
}
echo'<br>';

$a=1;
echo '<table border="1" width="50%">';
for($a=1;$a<13;$a++){
    echo'<tr>';
    for($b=1;$b<13;$b++){
        $c=$a*$b;
        if($c%2==0){
            echo '<td style="color:red">'.$c.'</td>';
        }
        else{
            echo '<td style="color:blue">'.$c.'</td>';
        }
    }
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
    for($a=1;$a<13;$a++){ ?>
 <tr>
 <?php   
    for($b=1;$b<13;$b++){
         $c=$a*$b;
         if($c%2==0){ ?>
<td style="color:green"> <?php echo$c; ?> </td> 
 <?php 
        }
        else{ ?>
<td style="color:purple"> <?php echo$c; ?> </td>
  <?php
        }
    }
 ?>
</tr>
  <?php
         } ?>
</table>
</body>
</html>