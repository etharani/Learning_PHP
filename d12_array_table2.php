<?php
$student=[
    "s1"=>[
       
       "first_name"=>"Tharani",
       "last_name"=>"Esan",
       "age"=>25,
       "mark"=>[
           "maths"=>74,
           "tamil"=>58,
          "english"=>88
        ]
       ],
    "s2"=>[
        
        "first_name"=>"Kithu",
        "last_name"=>"Esawaranathan",
        "age"=>16,
        "marks"=>[
            "maths"=>88,
            "tamil"=>70,
           "english"=>46
        ]
      ],
    "s3"=>[
        
        "first_name"=>"Thivya",
        "last_name"=>"Vimalan",
        "age"=>21,
        "marks"=>[
            "maths"=>68,
            "tamil"=>98,
           "english"=>61
        ]
     ],
     "s4"=>[
        
        "first_name"=>"Kavitha",
        "last_name"=>"Kamal",
        "age"=>18,
        "marks"=>[
            "maths"=>58,
            "tamil"=>38,
           "english"=>88
        ]
      ],
      "s5"=>[
        
        "first_name"=>"Ranitha",
        "last_name"=>"Esan",
        "age"=>20,
        "marks"=>[
            "maths"=>68,
            "tamil"=>98,
           "english"=>35
        ]
      ]
];
?>
<!DOCTYPE html>
<html>
<head>
<title>start work html</title>
</head>
<body>
<table border ="1"width="100%">
<tr>
       <th>No</td>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Age</th>
       <th>Maths</th>
       <th>Tamil</th>
       <th>English</th>
       <th>Total</th>
       <th>Average</th>
    </tr>
    <?php
    $x=1;
    foreach($student as $k=>$v){
        ?>
    <tr height="20">
        <td> <?php echo $x++ ; ?> </td>
        <?php
        foreach ($v as $kstudent => $vstudent){
            if(is_array($vstudent)){
                $total=0;
                foreach($vstudent as $kmark => $vmark){
                    ?>
                    <td> <?php echo  $vmark; ?>  </td>
                    <?php
                    $total += $vmark;
                }
            }
            else{
                ?>
                <td> <?php echo $vstudent ;?> </td>
                <?php
            }
        }
        ?>
        <td> <?php echo $total ; ?> </td>
        <td> <?php echo $total/3 ; ?> </td>
        <?php
    }
    ?>
    </table>
</body>
</html>
<br>
<?php
echo'<table border ="1"width="100%">';
echo'<tr>';
     echo'  <th>No</td>';
     echo' <th>First Name</th>';
     echo'  <th>Last Name</th>';
     echo'  <th>Age</th>';
     echo'  <th>Maths</th>';
     echo'  <th>Tamil</th>';
     echo'   <th>English</th>';
     echo'   <th>Total</th>';
     echo'  <th>Average</th>';
    echo'</tr>';
    $x=1;
    foreach($student as $k=>$v){
     echo'   <tr height="20">';
     echo '<td>'.  $x++.'</td>';
     foreach ($v as $kstudent => $vstudent){
        if(is_array($vstudent)){
            $total=0;
            foreach($vstudent as $kmark => $vmark){
    echo'  <td>' . $vmark.' </td>'; 
    $total += $vmark;
}
}
else{
   echo' <td>' .$vstudent .'</td>';
}
}
echo'<td>' . $total .' </td>';
echo'<td>'.  $total/3 .'</td>';
    }
echo'</table>';
echo'<br>';

echo'<table border ="1">';
echo'<tr>';
  echo"<th>Student Details</th>";
  echo'</tr>';
     echo'<tr>';
     
      echo"<th>First Name</th>";
      echo"<th>Last Name</th>";
      echo"<th>Age</th>";
      echo"<th>Maths</th>";
      echo"<th>Tamil</th>";
      echo"<th>English</th>";
      echo"<th>Total</th>";
      echo"<th>Average</th>";

    echo'</tr>';
    foreach($student as $s=>$q){
        echo'<tr>';
        if(is_array($q)){
        
         foreach($q as $k=>$v){
             if(is_array($v)){
                 $t=0;
                 
                 foreach($v as $z=>$w){
                     echo"<td>{$w}</td>";
                     $t+=$w;
                     $a=$t/3;
                  }
             }
             else{
                 echo "<td>{$v}</td>";
                 }
             }
          echo"<td>{$t}</td>";
          echo"<td>{$a}</td>";
     }
     else{
         echo "<td>{$q}</td>";
         }
        
            
         echo'</tr>';
 }

echo '</table>';
echo '<br>';
?> 