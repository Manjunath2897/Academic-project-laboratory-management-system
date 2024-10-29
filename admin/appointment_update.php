<?php
include('../dbconnect/dbcon.php');
$appointment_id=$_POST['appointment_id'];
$patient_id=$_POST['patient_id'];
$test_service_id=$_POST['test_service_id'];
$appointment_date=$_POST['appointment_date'];
$appointment_time=$_POST['appointment_time'];
$description=$_POST['description'];
$appointment_status=$_POST['appointment_status'];
$technician_id=$_POST['technician_id'];

$sql="update appointment set appointment_id='$appointment_id',patient_id='$patient_id',test_service_id='$test_service_id',appointment_date='$appointment_date',appointment_time='$appointment_time',description='$description',appointment_status='$appointment_status',technician_id='$technician_id'where appointment_id='$appointment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="appointment_view.php";
</script>