<?php
include('../dbconnect/dbcon.php');


$patient_id=$_POST['patient_id'];
$date=$_POST['date'];


$sql="insert into test_report_master value(null,'$patient_id','$date')";
mysqli_query($conn,$sql);

?>
<script>
alert('inserted');
document.location="test_report_master_view.php";
</script>
