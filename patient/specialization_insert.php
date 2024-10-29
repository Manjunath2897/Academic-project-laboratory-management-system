<?php
include('../dbconnect/dbcon.php');


$specialization_name=$_POST['specialization_name'];
$description=$_POST['description'];

$sql="insert into specialization value(null,'$specialization_name','$description') ";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="specialization_view.php";
</script>
