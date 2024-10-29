 <?php
	  include('../dbconnect/dbcon.php');
	 
$pmid=$_REQUEST["pmid"];
$dat=$_REQUEST["date"];
$c_id=$_REQUEST["customer_id"];
 $p_id=$_REQUEST["prodcut_id"];
$qnt=$_REQUEST["qnt"];
	


$attachment_details=$_FILES['attachment_details']['name'];
$tmp_location=$_FILES['attachment_details']['tmp_name'];
$target="../images/".$attachment_details;
move_uploaded_file($tmp_location,$target);

  
   $sql2="select * from   customer_order_master where customer_order_master_id='$pmid'" ;
		$res2=mysqli_query($conn,$sql2);
		if($row2=mysqli_fetch_array($res2))
		{
		move_uploaded_file($tmp_location,$target);
		 $sql3="insert into  customer_order_details values(null,'$pmid','$p_id','$qnt','$attachment_details')";
		mysqli_query($conn,$sql3);
		
		
		}
		else
		{
		move_uploaded_file($tmp_location,$target);
		
		$sql5="insert into customer_order_details values(null,'$pmid','$p_id','$qnt','$attachment_details')";
		mysqli_query($conn,$sql5);
		$sql6="insert into  customer_order_master values('$pmid','$dat','$c_id')";
		mysqli_query($conn,$sql6);
		
		}
?>

<script>
alert('Purchase Details Added....');
document.location="Customer_order_master_form.php?pmid="+<?php echo $pmid; ?>+"&c_id="+<?php echo $c_id; ?>;

</script>