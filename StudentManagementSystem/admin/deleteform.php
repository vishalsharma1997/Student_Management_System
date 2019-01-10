<?php
        include('../dbcon.php');
        $sid = $_REQUEST['sid'];
        if(isset($sid))
        {
            $query="delete from student where id = '$sid'";
            $run = mysqli_query($conn,$query);

            if($run == true)
            {
?>
                <script>
                    alert("Data Deleted Successfully !!!");
                    window.open('deletestudent.php','_self');
                </script>
<?php
            }
        }
    

?>