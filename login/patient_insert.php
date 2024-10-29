
<?php
include('../dbconnect/dbcon.php');


$patient_name=$_POST['patient_name'];
$date_of_birth=$_POST['date_of_birth'];
$patient_gender=$_POST['patient_gender'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$patient_number=$_POST['patient_number'];
//$patient_photo=$_POST['patient_photo'];

$password=$_POST['password'];

$patient_photo=$_FILES['patient_photo']['name'];
$tmp_location=$_FILES['patient_photo']['tmp_name'];
$target="../images/".$patient_photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into patient value(null,'$patient_name','$date_of_birth','$patient_gender','$address','$mobile_no','$email_id','$patient_number','$patient_photo') ";
mysqli_query($conn,$sql);

echo $sql1="insert into login value(null,'$patient_number','$password','patient','who are you','patient','Active')";
mysqli_query($conn,$sql1);

?>
<script>
alert('inserted');
document.location="login.php";
</script>
