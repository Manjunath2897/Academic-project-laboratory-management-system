<?php
include('../dbconnect/dbcon.php');
$test_category_id=$_POST['test_category_id'];
$test_category_name=$_POST['test_category_name'];
$test_category_description=$_POST['test_category_description'];


$sql="update test_category set test_category_id='$test_category_id',test_category_name='$test_category_name',test_category_description='$test_category_description'where test_category_id='$test_category_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="test_category_view.php";
</script>