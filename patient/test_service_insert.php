<?php

include('../dbconnect/dbcon.php');

$test_category_id=$_POST['test_category_id'];
$test_service_name=$_POST['test_service_name'];
$description=$_POST['description'];
$amount_test=$_POST['amount_test'];


$sql="insert into test_service values(null,'$test_category_id','$test_service_name','$description','$amount_test') ";
mysqli_query($conn,$sql);
?>

<script>
alert('Inserted');
document.location="test_service_view.php";
</script>