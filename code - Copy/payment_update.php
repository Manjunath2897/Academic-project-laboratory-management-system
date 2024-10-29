<?php
include('../dbconnect/dbcon.php');
$payment_id=$_POST['payment_id'];
$test_report_master_id=$_POST['test_report_master_id'];
$amount=$_POST['amount'];
$payment_type=$_POST['payment_type'];
$payment_date=$_POST['payment_date'];
$payment_time=$_POST['payment_time'];
$payment_staus=$_POST['payment_staus'];


$sql="update payment set payment_id='$payment_id',test_report_master_id='$test_report_master_id',amount='$amount',payment_type='$payment_type',payment_date='$payment_date',payment_time='$payment_time',payment_staus='$payment_staus'where payment_id='$payment_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="payment_view.php";
</script>