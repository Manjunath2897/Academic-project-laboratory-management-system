<?php
include('../dbconnect/dbcon.php');


$test_report_master_id=$_POST['test_report_master_id'];
$test_service_id=$_POST['test_service_id'];
$charges=$_POST['charges'];
$discount=$_POST['discount'];
$attachment_details=$_POST['attachment_details'];


$sql="insert into test_report_details value(null,'$test_report_master_id','$test_service_id','$charges','$discount','$attachment_details')";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="test_report_details_view.php";
</script>
