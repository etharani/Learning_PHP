<?php
$mark=75;
if($mark>=50){
    echo "PASS";
}
else{
    echo"FAIL";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>if_condition</title>
</head>
<?php
if($mark>=50){   
     ?>
 <body style= "background-color:green;">
<?php
} else{   
    ?>
   <body style= "background-color:red;">  
<?php
}
?>

</body>
</html>
