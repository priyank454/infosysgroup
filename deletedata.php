<?php
include('dbconn.php');
$id=$_REQUEST['sid'];
$qry="DELETE FROM `order1` WHERE `id`='$id' ";
$run=mysqli_query($conn,$qry);
   if($run==true)
{
?>
    <script>
        alert('data deleted successfully');
        window.open('myorder.php');
    </script>
    <?php
}
?>














