<!DOCTYPE html>
<html>
<head>
<title>start work html</title>
</head>
<body>
<!-- Home work other methods -->
<?php
//  Method - 1
$first_name="Thara";
$last_name="Easan";
$age=24;
$gender="female";
$telephone_number="0774411148";
echo"Method-1";
 ?>
 <br>
 First name:<?php echo $first_name ?>
 <br>
 Last name: <?php echo $last_name ?>
 <br>
 Age: <?php echo $age ?>
 <br>
 Gender: <?php echo $gender ?>
 <br>
 Telephone number: <?php echo $telephone_number ?>
 <br>

 <!-- Method - 2 -->
 <p>Method-2</p>
 
     <table border="1">
    <tr>
         <td>First name</td>
         <td><?php echo $first_name ?></td>
     </tr>
     <tr>
         <td>Last name</td>
         <td><?php echo $last_name ?></td>
     </tr>
     <td>Age</td>
         <td><?php echo $age ?></td>
     </tr>
     <tr>
         <td>Gender</td>
         <td><?php echo $gender ?></td>
     </tr>
     <tr>
         <td>Telephone number</td>
         <td><?php echo $telephone_number ?></td>
     </tr>
 </table>

 <br>
 
 <!-- Metho -3 -->
 <?php
 echo"Method-3";
 echo"<br>";
 echo'<table border="1">';
 echo'<tr>';
 echo'<td>First name</td>';
 echo'<td>'.$first_name.'</td>';
 echo'</tr>';
 echo'<tr>';
 echo'<td>Last name</td>';
 echo'<td>'.$last_name.'</td>';
 echo'</tr>';
 echo'<tr>';
 echo'<td>Age</td>';
 echo'<td>'.$age.'</td>';
 echo'</tr>';
 echo'<tr>';
 echo'<td>Gender</td>';
 echo'<td>'.$gender.'</td>';
 echo'</tr>';
 echo'<tr>';
 echo'<td>Telephone number</td>';
 echo'<td>'.$telephone_number.'</td>';
 echo'</tr>';
echo'</table>';
?>
<br>

<!-- Method - 4-->
<?php
echo"Method-4";
echo"<br>";
echo "<table border=\"1\">
     <tr>
         <td>First name</td>
         <td>$first_name</td>
     </tr>
     <tr>
         <td>Last name</td>
         <td>$last_name</td>
     </tr>
     <tr>
         <td>Age</td>
         <td> $age</td>
     </tr>
     <tr>
         <td>Gender</td>
         <td>$gender</td>
     </tr>
     <tr>
         <td>Telephone number</td>
         <td>$telephone_number</td>
     </tr>
 </table>";
 ?>
</body>
</html>
 
 