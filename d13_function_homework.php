<?php
function colorfun($u,$colorname){
if($u>=75 && $u<=100){
    $colorname="green";
    return $colorname;
}
elseif($u>=65 && $u<=74){
   $colorname="blue";
   return $colorname;
}
elseif($u>=55 && $u<=64){
   $colorname="orange";
   return $colorname;
}
elseif($u>=45 && $u<=54){
   $colorname="yellow";
   return $colorname;
}
elseif($u>=0 && $u<=44){
   $colorname="red";
   return $colorname;
}
}
function resultfun($y,$grade){
if($y>=75 && $y<=100){
    $grade="A";
    return $grade;
 }
 elseif($y>=65 && $y<=74){
    $grade="B";
    return $grade;
}
elseif($y>=55 && $y<=64){
    $grade="C";
    return $grade;
}
elseif($y>=45 && $y<=54){
    $grade="D";
    return $grade;
}
elseif($y>=0 && $y<=44){
    $grade="F";
    return $grade;
} 
 } 
$student=[
    "s1"=>[
       "id"=>101,
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
        "id"=>102,
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
        "id"=>103,
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
        "id"=>104,
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
        "id"=>105,
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
<table border ="1"width="50%">
<tr>
<th>Student Details</th>
</tr>
    <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Age</th>
       <th>Maths</th>
       <th>Maths Result</th>
       <th>Tamil</th>
       <th>Tamil Result</th>
       <th>English</th>
       <th>English Result</th>
       <th>Total</th>
       <th>Average</th>
       <th>Result</th>
    </tr>
    <?php
        foreach($student as $s=>$q){ ?>
           <tr>
           <?php
           if(is_array($q)){ ?>
            
             <?php
              foreach($q as $k=>$v){
                if(is_array($v)){ ?>
                    
                    <?php
                        $t=0;
                        $colorname1="";
                        $markgrade="";
                     foreach($v as $z=>$w){ 
                       $markclr= colorfun($w,$colorname1);
                       $markgra= resultfun($w,$markgrade);
                    ?>
                         <td style="color:<?php echo $markclr; ?>"> <?php echo $w; ?> </td>
                         <td style="background:<?php echo $markclr; ?>"> <?php echo $markgra; ?> </td> 
                         <?php 
                           $t+=$w; 
                           $a=$t/3;
                           $totalclrname=""; 
                           $avegrade="";
                           $avergra= resultfun($a,$avegrade);
                           $averclr= colorfun($a,$totalclrname);
                     }
                        ?>
                     
                <?php
                }
                else{ ?>
                    <td> <?php echo $v; ?> </td>
                    <?php
                     }
             } 
             ?>
             <td> <?php echo $t; ?> </td>
             <td style="color:<?php echo $averclr; ?>"> <?php echo round($a,2); ?> </td>
             <td style="background:<?php echo $averclr; ?>"> <?php echo $avergra; ?> </td>
             
       <?php
        }
        else{ ?>
        <td> <?php echo $q;?> </td>
        <?php   } ?>
    </tr>
    <?php } ?>
</table>
</body>
</html>
