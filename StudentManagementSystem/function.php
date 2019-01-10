<?php

    function showdetails($std,$rollno)
    {
        include('dbcon.php');
        $query = "select * from student where rollno = '$rollno' and standard = '$std'";
        $run = mysqli_query($conn,$query);
        if(mysqli_num_rows($run) > 0)
        {
            $data=mysqli_fetch_assoc($run);
            ?>
            
            <table border = "1" style = "width:50%; margin-top:20px;" align="center">
                <tr>
                    <th colspan ="3">Student Details</th>
                </tr>
                <tr>
                    <td rowspan = "5" align = "center"><img src = "dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px; padding-left:0px;"></td>
                    <th>Roll No</th>
                    <td><?php echo $data['rollno']; ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php echo $data['name']; ?></td>
                </tr>
                <tr>
                    <th>Standard</th>
                    <td><?php echo $data['standard']; ?></td>
                </tr>
                <tr>
                    <th>Parent's Contact No.</th>
                    <td><?php echo $data['parentcontact']; ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?php echo $data['city']; ?></td>
                </tr>
            </table>
            
            <?php
        }
        else
        {
            echo "<script>alert('No Student Found !!!');</script>";
        }
        
    }

?>