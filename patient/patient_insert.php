
<?php
include('../dbconnect/dbcon.php');


$patient_name=$_POST['patient_name'];
$date_of_birth=$_POST['date_of_birth'];
$patient_gender=$_POST['patient_gender'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$patient_number=$_POST['patient_number'];
$patient_photo=$_POST['patient_photo'];
$sql="insert into patient value(null,'$patient_name','$date_of_birth','$patient_gender','$address','$mobile_no','$email_id','$patient_number','$patient_photo') ";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="patient_view.php";
</script>
