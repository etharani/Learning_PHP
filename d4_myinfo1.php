<?php 
$first_name="Thara";
$last_name="Easan";
?>
<!DOCTYPE html>
<html>
<head>
<title>my info</title>
<style>
    h1{
        color:blueviolet;
    }
    h2{
        color:black;
        background-color:yellow;
    }
    b{
        color:darkblue;
    }
    i{
        color:dodgerblue;
    }
    #id_selector{
        color:green;
    }
    .class_selector{
        color:red;
    }

    </style>

</head>
<body>
<h1>My info</h1>
<hr color="red">
<b>First name :</b><i> <?php echo $first_name ?> </i>
<br>
<b>Last name :</b><i> <?php echo $last_name ?> </i>
<hr color="gray">
<h2> Thank you</h2>
<br>
<h1 id="id_selector"> ID Method </h1>
<h1 class="class_selector"> CLASS Method </h1> 
<h1 id="id_selector" class="class_selector"> Welcome </h1> 
<h1 id="id_selector" class="class_selector" style="color:blue"> Welcome-1 </h1> 
<h1><span class="class_selector">My </span> <span id="id_selector"> info </span></h1>
<h1><span style="color:green">My </span> <span style="color:red"> info </span></h1>
<h1><span>My </span> <span> info </span></h1>
<h1><i style="color:blue">My </i> <i style="color:orange"> info </i></h1>
<h1>My </h1> <h1> info </h1>
</boby>
</html>