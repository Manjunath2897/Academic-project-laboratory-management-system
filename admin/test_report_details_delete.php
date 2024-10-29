<?php

include('../dbconnect/dbcon.php');


$test_report_details_id=$_REQUEST['test_report_details_id'];
$sql="delete from test_report_details where test_report_details_id='$test_report_details_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="test_report_details_view.php";
</script>