<?php
include('../dbconnect/dbcon.php');
$specialization_id=$_POST['specialization_id'];
$specialization_name=$_POST['specialization_name'];
$description=$_POST['description'];


$sql="update specialization set specialization_id='$specialization_id',specialization_name='$specialization_name',description='$description'where specialization_id='$specialization_id'";
mysqli_query($conn,$sql);
?>
<script>
alert('updated..');
document.location="specialization_view.php";
</script>