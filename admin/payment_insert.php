<?php
include('../dbconnect/dbcon.php');


$test_report_master_id=$_POST['test_report_master_id'];
$amount=$_POST['amount'];
$payment_type=$_POST['payment_type'];
$payment_date=$_POST['payment_date'];
$payment_time=$_POST['payment_time'];
$payment_staus=$_POST['payment_staus'];
$sql="insert into payment value(null,'$test_report_master_id','$amount','$payment_type','$payment_date','$payment_time','$payment_staus') ";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="payment_view.php";
</script>
