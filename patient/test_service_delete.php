<?php

include('../dbconnect/dbcon.php');


$test_service_id=$_REQUEST['test_service_id'];
$sql="delete from test_service where test_service_id='$test_service_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="test_service_view.php";
</script>