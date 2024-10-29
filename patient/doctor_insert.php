<?php
include('../dbconnect/dbcon.php');


$doctor_name=$_POST['doctor_name'];
$age=$_POST['age'];
$qualification=$_POST['qualification'];
$contact_no=$_POST['contact_no'];
$email_id=$_POST['email_id'];
$specialization_id=$_POST['specialization_id'];
$test_service_id=$_POST['test_service_id'];

$sql="insert into doctor value(null,'$doctor_name','$age','$qualification','$contact_no','$email_id','$specialization_id','$test_service_id') ";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="doctor_view.php";
</script>
