<?php
include('../dbconnect/dbcon.php');
$doctor_id=$_POST['doctor_id'];
$doctor_name=$_POST['doctor_name'];
$age=$_POST['age'];
$qualification=$_POST['qualification'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$specialization_id=$_POST['specialization_id'];
$test_service_id=$_POST['test_service_id'];

$sql="update doctor set doctor_id='$doctor_id',doctor_name='$doctor_name',age='$age',qualification='$qualification',contact_no='$contact_no',email_id='$email_id',specialization_id='$specialization_id',test_service_id='$test_service_id'where doctor_id='$doctor_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="doctor_view.php";
</script>