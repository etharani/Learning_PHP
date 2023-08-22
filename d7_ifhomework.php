<!DOCTYPE html>
<html>
<head>
<title>start work html</title>
</head>
<body>
    <?php
$first_name="Thaau";
$last_name="Easn";
$age=21;
$gender="female";
$telephone_number="0774411148";
$val="odd";
?>
<table border="1">
    <tr  style="background-color: <?php echo ($val=="odd")?'blue':'red';?>">
         <td>First name</td>
         <td><?php echo $first_name ?></td>
     </tr>
     <tr  style="background-color: <?php echo ($val=="even")?'blue':'red';?>">
         <td>Last name</td>
         <td><?php echo $last_name ?></td>
     </tr>
     <tr  style="background-color: <?php echo ($val=="odd")?'blue':'red';?>">
         <td>Age</td>
         <td><?php echo $age ?></td>
     </tr>
     <tr  style="background-color: <?php echo ($val=="even")?'blue':'red';?>">
         <td>Gender</td>
         <td><?php echo $gender ?></td>
     </tr>
     <tr  style="background-color: <?php echo ($val=="odd")?'blue':'red';?>">
         <td>Telephone number</td>
         <td><?php echo $telephone_number ?></td>
     </tr>
 </table>

</body>
</html> 