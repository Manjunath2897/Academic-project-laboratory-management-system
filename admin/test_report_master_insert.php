<?php /*
include('../dbconnect/dbcon.php');


$patient_id=$_POST['patient_id'];
$date=$_POST['date'];


$sql="insert into test_report_master value(null,'$patient_id','$date')";
mysqli_query($conn,$sql); */

?>

 <?php
	   include('../dbconnect/dbcon.php');
	 
$pmid=$_REQUEST["pmid"];
$dat=$_REQUEST["date"];
$c_id=$_REQUEST["patient_id"];
 $p_id=$_REQUEST["test_service_id"];
$qnt=$_REQUEST["qnt"];


  
   echo $sql2="select * from   test_report_master where test_report_master_id='$pmid'" ;
		$res2=mysqli_query($conn,$sql2);
		if($row2=mysqli_fetch_array($res2))
		{
		 $sql3="insert into  test_report_details values(null,'$pmid','$p_id','$qnt','Pending')";
		mysqli_query($conn,$sql3);
		
		
		}
		else
		{
		
		$sql5="insert into test_report_details values(null,'$pmid','$p_id','$qnt','Pending')";
		mysqli_query($conn,$sql5);
		$sql6="insert into  test_report_master values('$pmid','$dat','$c_id')";
		mysqli_query($conn,$sql6);
		
		}
?>

<script>
alert('Purchase Details Added....');
document.location="Customer_order_master_form.php?pmid="+<?php echo $pmid; ?>+"&c_id="+<?php echo $c_id; ?>;

</script>

