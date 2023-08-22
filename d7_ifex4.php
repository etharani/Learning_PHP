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
<style>
    .body-bg{
 background-color:<?php echo $colorname; ?>;
}
</style>
</head>
<body class="body-bg">

</body>
</html>