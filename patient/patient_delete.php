<?php

include('../dbconnect/dbcon.php');


$patient_id=$_REQUEST['patient_id'];
$sql="delete from patient where patient_id='$patient_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="patient_view.php";
</script>