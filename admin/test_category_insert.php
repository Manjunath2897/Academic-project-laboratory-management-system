<?php
include('../dbconnect/dbcon.php');


$test_category_name=$_POST['test_category_name'];
$test_category_description=$_POST['test_category_description'];


$sql="insert into test_category value(null,'$test_category_name','$test_category_description')";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="test_category_view.php";
</script>