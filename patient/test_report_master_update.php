<?php
include('../dbconnect/dbcon.php');
$test_report_master_id=$_POST['test_report_master_id'];
$patient_id=$_POST['patient_id'];
$date=$_POST['date'];


$sql="update test_report_master set test_report_master_id='$test_report_master_id',patient_id='$patient_id',date='$date'where test_report_master_id='$test_report_master_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="test_report_master_view.php";
</script>