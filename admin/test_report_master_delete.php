<?php

include('../dbconnect/dbcon.php');


$test_report_master_id=$_REQUEST['test_report_master_id'];
$sql="delete from test_report_master where test_report_master_id='$test_report_master_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="test_report_master_view.php";
</script>