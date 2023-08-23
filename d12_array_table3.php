<?php
$student=[
    "s1"=>[
       "id"=>101,
       "first_name"=>"Tharani",
       "last_name"=>"Esan",
       "age"=>25,
       "marks"=>[
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
                        $colorname="";
                        $markgrade="";
                     foreach($v as $z=>$w){ 
                         if($w>=75 && $w<=100){
                             $colorname="green";
                             $markgrade="A";
                         }
                         elseif($w>=65 && $w<=74){
                            $colorname="blue";
                            $markgrade="B";
                        }
                        elseif($w>=55 && $w<=64){
                            $colorname="orange";
                            $markgrade="C";
                        }
                        elseif($w>=45 && $w<=54){
                            $colorname="yellow";
                            $markgrade="D";
                        }
                        elseif($w>=0 && $w<=44){
                            $colorname="red";
                            $markgrade="F";
                        }
                    ?>
                         <td style="background:<?php echo $colorname; ?>"> <?php echo $w; ?> </td>
                         <td style="background:<?php echo $colorname; ?>"> <?php echo $markgrade; ?> </td> 
                         <?php 
                           $t+=$w; 
                           $a=$t/3;
                           $totalclrname=""; 
                           $avegrade="";
                           if($a>=75 && $a<=100){
                              $totalclrname="green";
                              $avegrade="A";
                           }
                           elseif($a>=65 && $a<=74){
                              $totalclrname="blue";
                              $avegrade="B";
                          }
                          elseif($a>=55 && $a<=64){
                              $totalclrname="orange";
                              $avegrade="C";
                          }
                          elseif($a>=45 && $a<=54){
                              $totalclrrname="yellow";
                              $avegrade="D";
                          }
                          elseif($a>=0 && $a<=44){
                              $totalclrname="red";
                              $avegrade="F";
                          } 
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
             <td  style="background:<?php echo $totalclrname; ?>"> <?php echo round($a,2); ?> </td>
             <td  style="background:<?php echo $totalclrname; ?>"> <?php echo $avegrade; ?> </td>
             
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
