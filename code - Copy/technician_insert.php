<?php
include('../dbconnect/dbcon.php');


$test_service_id=$_POST['test_service_id'];
$technician_name=$_POST['technician_name'];
$specialization_id=$_POST['specialization_id'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$address=$_POST['address'];

$sql="insert into technician value(null,'$test_service_id','$technician_name','$specialization_id','$email_id','$contact_no','$address')";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="technician_view.php";
</script>

