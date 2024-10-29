<?php

include('../dbconnect/dbcon.php');


$test_category_id=$_REQUEST['test_category_id'];
$sql="delete from test_category where test_category_id='$test_category_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="test_category_view.php";
</script>