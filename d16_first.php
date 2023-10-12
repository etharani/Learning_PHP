<!DOCTYPE html>
<html>
<head>
<title>dynamic page</title>
<style>
    .header{
        background-color:#fcc;
    }
    .footer{
        background-color:#cfc;
    }
    .sidebar{
        background-color:#ccc;
    }
    h1{
        color: #00f;
    }
</style>
</head>
<body>
    <table border ="1" width="100%">
        <tr height="100" class="header">
            <td colspan="2"> Header </td>
</tr>
<tr height="600">
    <td width="20%" class="sidebar">
        <ul>
        <li> <a href="d16_first.php?p=home"> Home </a> </li>
        <li> <a href="d16_first.php?p=about"> About </a> </li>
</ul>
</td>
<td>
    <?php
    if(isset($_GET["p"])){
        $page=$_GET["p"];
        // echo $page;
        $path='d16_pagefile/'.$page.'.php';
        // echo $path;

        if(file_exists($path)){
            include_once($path);
        }
        else{
            echo '<h1 style="color:red">404 page not found </h1>';
        }
    }
    else{
        include_once('d16_pagefile/home.php');
    }
    ?>
    </td>
</tr>
<tr height ="100" class="footer">
    <td colspan="2"> Footer</td>
</tr>
</table>
</body>
</html>

        