<?php
include('../dbconnect/dbcon.php');
$patient_id=$_POST['patient_id'];
$patient_name=$_POST['patient_name'];
$date_of_birth=$_POST['date_of_birth'];
$patient_gender=$_POST['patient_gender'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$patient_number=$_POST['patient_number'];
$patient_photo=$_POST['patient_photo'];

$sql="update patient set patient_id='$patient_id',patient_name='$patient_name',date_of_birth='$date_of_birth',patient_gender='$patient_gender',address='$address',mobile_no='$mobile_no',email_id='$email_id',patient_number='$patient_number',patient_photo='$patient_photo'where patient_id='$patient_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="patient_view.php";
</script>