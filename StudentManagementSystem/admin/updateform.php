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
    include('../dbcon.php');

    $sid = $_GET['sid'];
    
    $query = "select * from student where id = '$sid'";
    $run = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($run);
    
?>


<form method="post" action = "updatedata.php" enctype="multipart/form-data">
    <table align="center" border = "1" style="width:70%; margin-top:40px;">
       <tr>
           <td>Roll No</td>
           <td><input type = "text" name = "rollno" value = "<?php echo $data['rollno'];?>" required></td>
       </tr>
       <tr>
           <td>Full Name</td>
           <td><input type = "text" name = "name" value = "<?php echo $data['name'];?>" required></td>
       </tr>
       <tr>
           <td>City</td>
           <td><input type = "text" name = "city" value = "<?php echo $data['city'];?>" required></td>
       </tr>
       <tr>
           <td>Parents Contact No.</td>
           <td><input type = "text" name = "pcon" value = "<?php echo $data['parentcontact'];?>" required></td>
       </tr>
       <tr>
           <td>Standard</td>
           <td><input type = "number" name = "std" value = "<?php echo $data['standard'];?>" required></td>
       </tr>
       <tr>
           <td>Image</td>
           <td><input type = "file" name = "simg" required></td>
       </tr>
       <tr>
           <td  colspan="2" align="center">
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
                <input type = "submit" name ="submit" value="SUBMIT">
           </td>
       </tr>
        
    </table>
</form>