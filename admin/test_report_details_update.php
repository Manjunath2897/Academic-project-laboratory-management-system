<?php
include('../dbconnect/dbcon.php');
$test_report_details_id=$_POST['test_report_details_id'];
$test_report_master_id=$_POST['test_report_master_id'];
$test_service_id=$_POST['test_service_id'];
$charges=$_POST['charges'];
$discount=$_POST['discount'];
$attachment_details=$_POST['attachment_details'];


$sql="update test_report_details set test_report_details_id='$test_report_details_id',test_report_master_id='$test_report_master_id',test_service_id='$test_service_id',charges='$charges',discount='$discount',attachment_details='$attachment_details'where test_report_details_id='$test_report_details_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="test_report_details_view.php";
</script>