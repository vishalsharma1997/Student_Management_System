<?php

    session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";
        
    }
    else
    {
//        echo "Error !!!";
        header("location:../login.php");
    }

?>

<?php
    include('header.php');
    include('titlehead.php');
?>

<form method="post" action = "addstudent.php" enctype="multipart/form-data">
    <table align="center" border = "1" style="width:70%; margin-top:40px;">
       <tr>
           <td>Roll No</td>
           <td><input type = "text" name = "rollno" placeholder ="Enter Roll No. : " required></td>
       </tr>
       <tr>
           <td>Full Name</td>
           <td><input type = "text" name = "name" placeholder ="Enter Full Name : " required></td>
       </tr>
       <tr>
           <td>City</td>
           <td><input type = "text" name = "city" placeholder ="Enter Your City : " required></td>
       </tr>
       <tr>
           <td>Parents Contact No.</td>
           <td><input type = "text" name = "pcon" placeholder ="Enter Parent's Contact No. : " required></td>
       </tr>
       <tr>
           <td>Standard</td>
           <td><input type = "number" name = "std" placeholder ="Enter Standard : " required></td>
       </tr>
       <tr>
           <td>Image</td>
           <td><input type = "file" name = "simg" required></td>
       </tr>
       <tr>
           <td  colspan="2" align="center"><input type = "submit" name ="submit" value="SUBMIT"></td>
       </tr>
        
    </table>
</form>




</body>
</html>




<?php

    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $imgname = $_FILES['simg']['name'];
        $tmpimgname = $_FILES['simg']['tmp_name'];
        
        //$imgname = $name."".$rollno."_".$imgname;
        
        move_uploaded_file($tmpimgname,"../dataimg/$imgname");
        
        $query="insert into student(`rollno`, `name`, `city`, `parentcontact`, `standard`,`image`) values('$rollno','$name','$city','$pcon','$std','$imgname')";
        $run = mysqli_query($conn,$query);
        
        if($run == true)
        {
?>
            <script>
                alert("Data Inserted Successfully !!!");
            </script>
<?php
        }
    }

?>