<?php
$mark=75;
$colorname="";
if($mark>=50){
    echo "PASS";
    $colorname="green";
}
else{
    echo"FAIL";
    $colorname="red";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>if_condition</title>
</head>
<body style= "background-color:<?php echo $colorname; ?>">
</body>
</html>