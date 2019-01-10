<?php
        include('../dbcon.php');
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $id = $_POST['sid'];
        $imgname = $_FILES['simg']['name'];
        $tmpimgname = $_FILES['simg']['tmp_name'];

        //$imgname = $name."".$rollno."_".$imgname;
        
        move_uploaded_file($tmpimgname,"../dataimg/$imgname");
        
        $query="UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`parentcontact`='$pcon',`standard`='$std',`image`='$imgname' WHERE id = '$id'";
        $run = mysqli_query($conn,$query);
        
        if($run == true)
        {
?>
            <script>
                alert("Data Updated Successfully !!!");
                window.open('updateform.php?sid=<?php echo $id; ?>','_self');
            </script>
<?php
            //header("location : updateform.php?sid = $id");
        }
    

?>