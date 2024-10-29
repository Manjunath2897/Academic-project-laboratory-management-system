<?php

include('../dbconnect/dbcon.php');


$specialization_id=$_REQUEST['specialization_id'];
$sql="delete from specialization where specialization_id='$specialization_id'";
mysqli_query($conn,$sql);

?>

<script>
alert('deleted');
document.location="specialization_view.php";
</script>