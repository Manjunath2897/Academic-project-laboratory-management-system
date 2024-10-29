<?php

include('../dbconnect/dbcon.php');


$patient_id=$_POST['patient_id'];
$test_service_id=$_POST['test_service_id'];
$appointment_date=$_POST['appointment_date'];
$appointment_time=$_POST['appointment_time'];
$description=$_POST['description'];
$appointment_status=$_POST['appointment_status'];
$technician_id=$_POST['technician_id'];

$sql="insert into appointment value(null,'$patient_id','$test_service_id','$appointment_date','$appointment_time','$description','$appointment_status','$technician_id') ";
mysqli_query($conn,$sql);

?>

<script>
alert('inserted');
document.location="appointment_view.php";
</script>