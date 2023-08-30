<?php
$data=$_GET;
//echo'<pre>'
//print_r ($data);
//echo '<pre>';
?>
<!DOCTYPE html>
<html>
<head>
<title>form1</title>
</head>
<body>
<table border="1">
    <tr>
        <th> Key </th>
        <th> Value </th>
</tr>
<tr>
<td>First name</td>
         <td><?php echo $data["fname"];?> </td>
     </tr>
     <tr>
     <td>Last name</td>
         <td><?php echo $data["lname"];?> </td>
     </tr>
     <tr>
     <td>Gender</td>
         <td><?php echo $data["gender"];?> </td>
     </tr>
     <tr>
     <td>Subject</td>
         <td><?php echo implode(',', $data['subject']);?> </td>
     </tr>
     <tr>
     <td>Grade name</td>
         <td><?php echo $data["grade"];?> </td>
     </tr>
     <tr>
     <td>Address</td>
         <td><?php echo $data["address"];?> </td>
     </tr>
</table>

<form action="#"  method="get">
<label for="fname"> First Name</label>
     <input tpye="text" name="fname" id="fname" value="<?php echo $data["fname"] ?>">
     <br>
     <label for="lname"> Last Name</label>
     <input tpye="text" name="lname" id="lname" value="<?php echo $data["lname"] ?>">
     <br>
     <label>Gender</label>
     <label>
        <input type="radio" id="gender" name="gender" value="male"
        <?php
        if($data['gender']=='male'){
            echo 'checked';
        }
        ?>
        >Male</label>
    <label>
        <input type="radio" id="gender" name="gender" value="female" <?php
        if($data['gender']=='female'){
            echo 'checked';
        }
        ?>
        >Female</label>
        <br>
     <label>Subject</label> 
     <?php
     $subjects=implode(',',$data['subject']);
     $sub=explode(',',$subjects);
     ?>
     <label><input type="checkbox" id="subject" name="subject[]" value="maths"
     <?php
      if(in_array('maths',$sub)){
          echo 'checked';
      }
      ?>
      >Maths</label>
     <label> <input type="checkbox" id="subject" name="subject[]" value="tamil"
     <?php
      if(in_array('tamil',$sub)){
          echo 'checked';
      }
      ?>
     >Tamil</label>
     <label><input type="checkbox" id="subject" name="subject[]" value="english"
     <?php
      if(in_array('english',$sub)){
          echo 'checked';
      }
      ?>>English</label>
     <br>
     <label for="grade"> Grade Name</label>
     <select name="grade" id="grade">
         <option value="10a"
         <?php
      if($data["grade"]=="10a"){
          echo 'selected';
      }
      ?>
         >10A</option>
         <option value="11a"
         <?php
      if($data["grade"]=="11a"){
          echo 'selected';
      }
      ?>
      >11A</option>
         <option value="12a"
         <?php
      if($data["grade"]=="12a"){
          echo 'selected';
      }
      ?>
      >12A</option>
         <option value="13a"
         <?php
      if($data["grade"]=="13a"){
          echo 'selected';
      }
      ?>
      >13A</option>
</select>
<br>
<label for="address"> Address</label>
<textarea name="address" id="address" cols="30" rows="5"><?php echo $data["address"] ?></textarea>
<br>
<input type="submit">
<input type="reset">
</form>
</body>
</html>




    