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

<table align="center">
    <form action="updatestudent.php" method="post">
        <tr>
            <td>Enter Standard : </td>
            <td><input type = "number" name="standard" placeholder="Enter Standard" required = "required"></td>
        
            <td>Enter Student Name : </td>
            <td><input type = "text" name="stuname" placeholder="Enter Student Name" required = "required"></td>
            
            <td colspan="2"><input type = "submit" name = "submit" value = "Search"></td>
        </tr>
    </form>
</table>

<table align = "center" width="80%" border="1" style="margin-top:10px;">
    <tr style = "background-color : #000; color : #fff;">
        <th>No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No.</th>
        <th>Edit</th>
    </tr>
    <?php
        if(isset($_POST['submit']))
        {
            include('../dbcon.php');
            $std=$_POST['standard'];
            $name = $_POST['stuname'];
            $query = "select * from student where standard = '$std' and lower(name) like '%$name%'";
            $run = mysqli_query($conn,$query);
            if(mysqli_num_rows($run)<1)
            {
                echo "<tr><td colspan = '5'>No Records Found !!!</td></tr>";
            }
            else
            {
                $count=0;
                while($data = mysqli_fetch_assoc($run))
                {
                    $count++;
                    ?>
                     <tr align="center">
                        <td><?php echo $count; ?></td>
                        <td><img src = "../dataimg/<?php echo $data['image']; ?>" style = "max-width:100px;"/> </td>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['rollno'];?></td>
                        <td><a href ="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                    </tr>
                    <?php
                    
                }
            }
        }
    ?>
</table>
