<?php

include('../dbconnect/dbcon.php');


$doctor_id=$_REQUEST['doctor_id'];
$sql="delete from doctor where doctor_id='$doctor_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="doctor_view.php";
</script>