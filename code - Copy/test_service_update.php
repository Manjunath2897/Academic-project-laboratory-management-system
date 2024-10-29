<?php
include('../dbconnect/dbcon.php');
$test_service_id=$_POST['test_service_id'];
$test_category_id=$_POST['test_category_id'];
$test_service_name=$_POST['test_service_name'];
$description=$_POST['description'];
$amount=$_POST['amount'];


$sql="update test_service set test_service_id='$test_service_id',test_category_id='$test_category_id',test_service_name='$test_service_name',description='$description',amount='$amount'where test_service_id='$test_service_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="test_service_view.php";
</script>