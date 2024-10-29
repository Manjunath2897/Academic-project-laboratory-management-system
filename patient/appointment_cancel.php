<?php
 include('../dbconnect/dbcon.php');
 $appointment_id=$_REQUEST['appointment_id'];
 
 $sql="update appointment set appointment_status='cancelled' where appointment_id='$appointment_id'";
 mysqli_query($conn,$sql);

?>


<script>
alert('Appointment is Confrimed... \n Good Day');
document.location="appointment_view.php";
</script>