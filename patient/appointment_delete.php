<?php

include('../dbconnect/dbcon.php');


$appointment_id=$_REQUEST['appointment_id'];
$sql="delete from appointment where appointment_id='$appointment_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="appointment_view.php";
</script>