<?php
$a=[
    "id"=>100,
    "first_name"=>"Tharani",
    "last_name"=>"Esan",
    "age"=>25,
    "marks"=>[
        "maths"=>98,
        "tamil"=>88,
        "english"=>75
    ]
];
echo'<table border ="1">';
  foreach($a as $x=>$y){
      echo'<tr>';
       if(is_array($y)){
           echo"<td>{$x}</td> <td>";
           echo'<ul>';
           $total=0;
            foreach($y as $key=>$value){
                echo"<li>{$key}={$value}</li>";
                $total+=$value;
            }
            echo '</ul>';
            echo '</td>';
      
       }
       else{
           echo "<td>{$x}</td><td>{$y}</td>";
           }
    echo '</tr>';
  }
echo '</table>';
echo'<br>';
?>

<!DOCTYPE html>
<html>
<head>
<title>start work html</title>
</head>
<body>
<table border ="1" style="background:yellow">
  <?php 
     foreach($a as $x=>$y){  ?>
    <tr> 
       <?php
        if(is_array($y)){  ?>
        <td> <?php echo $x ?> </td> 
        <td>
        <ul>
        <?php
            foreach($y as $key=>$value){ ?>
            <li> <?php echo $key,'=',$value ?> </li>
        <?php    } ?>
        </ul>
        </td>
       <?php 
       }
       else{ ?>
        <td> <?php echo $x ?> </td>
        <td> <?php echo $y ?> </td>
        <?php   } ?>
    </tr>
  <?php } ?>
</table>
<br>
       </body>
       </html>

