<?php
include('../dbconnect/dbcon.php');
$technician_id=$_POST['technician_id'];
$test_service_id=$_POST['test_service_id'];
$technician_name=$_POST['technician_name'];
$specialization_id=$_POST['specialization_id'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$address=$_POST['address'];


$sql="update technician set technician_id='$technician_id',test_service_id='$test_service_id',technician_name='$technician_name',specialization_id='$specialization_id',email_id='$email_id',contact_no='$contact_no',address='$address'where technician_id='$technician_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="technician_view.php";
</script>