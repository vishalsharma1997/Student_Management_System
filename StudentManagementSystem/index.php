<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
</head>
<style>
	body {
		margin:0px;
		padding: 0;
		background: yellow;
		background-size: cover;
		font-family: Gregoria;
	}

	.pagetitle {
		background-color: #530602;
		color: #fff;
		height: 130px;
		margin-top: 50px;
		line-height: 130px;
	}

	.contents {
		background-color: #1DEFEF;
		color: #000;
		padding-top: 10px;
		height: 500px;
		font-size: 25px;
	}
</style>
<body>
	<div class="pagetitle" align="center">
        <h3><a href="login.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Admin Login</a></h3>
        <h1 style = "margin-left :100px;"> Welcome to Student Management System</h1>
    </div>
 
<div class = "contents">
    <form method="post" action="index.php">
    <table style="width:30%;" align="center" border="1">
        <tr>
            <td colspan = "2" align="center"> Student Information </td>
        </tr>
        <tr>
            <td align="left"> Choose Standard </td>
            <td>
                <select name = "std">
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                    <option value="9">9th</option>
                    <option value="10">10th</option>
                    <option value="11">11th</option>
                    <option value="12">12th</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left"> Enter Rollno </td>
            <td><input type = "text" name = "rollno" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type = "submit" value="Show Info" name="submit"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>


<?php

    if(isset($_POST['submit']))
    {
        $std = $_POST['std'];
        $rollno = $_POST['rollno'];
        
        include('dbcon.php');
        include('function.php');
        
        showdetails($std,$rollno);
        
    }

?>