<!DOCTYPE html>
<html>
<head>
<title>form1</title>
</head>
<body>
<form action="d14_send.php"  method="get">
<label for="fname"> First Name</label>
     <input tpye="text" name="fname" id="fname">
     <br>
     <label for="lname"> Last Name</label>
     <input tpye="text" name="lname" id="lname">
     <br>
     <label>Gender</label>
     <label>
        <input type="radio" id="gender" name="gender" value="male">Male</label>
    <label>
        <input type="radio" id="gender" name="gender" value="female">Female</label>
        <br>
     <label>Subject</label>    
     <label><input type="checkbox" id="subject" name="subject[]" value="maths">Maths</label>
     <label> <input type="checkbox" id="subject" name="subject[]" value="tamil">Tamil</label>
     <label><input type="checkbox" id="subject" name="subject[]" value="english">English</label>
     <br>
     <label for="grade"> Grade Name</label>
     <select name="grade" id="grade">
         <option value="10a">10A</option>
         <option value="11a">11A</option>
         <option value="12a">12A</option>
         <option value="13a">13A</option>
</select>
<br>
<label for="address"> Address</label>
<textarea name="address" id="address" cols="30" rows="5"></textarea>
<br>
<input type="submit">
<input type="reset">
</form>
</body>
</html>



