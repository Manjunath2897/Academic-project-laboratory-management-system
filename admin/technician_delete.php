<?php

include('../dbconnect/dbcon.php');


$technician_id=$_REQUEST['technician_id'];
$sql="delete from technician where technician_id='$technician_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="technician_view.php";
</script>