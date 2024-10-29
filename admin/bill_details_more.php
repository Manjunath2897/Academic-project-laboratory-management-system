<?php include('meta_tag.php'); ?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
 <?php  include('top_nav.php'); ?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <?php  include('menu.php'); ?>
    <!-- Mobile Menu end -->
   <script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Bill Details </h2>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<!-- <a href="appointment_form.php" class="btn btn-success">Add  New Appontment </a> -->		</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
	


<div id="printableArea">
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Bill Details</h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
							<thead>
<script type="text/javascript">
<!-- Begin
function startCalc(){
  interval = setInterval("calc()",1);
}
function calc(){
tot=(parseInt(document.formID.rate.value) * parseInt(document.formID.qnt.value));
dic=(parseInt(document.formID.dic.value));
total=(tot-dic);
document.formID.total.value=total;
}
function stopCalc(){
  clearInterval(interval);
}
//  End -->
</script>

 <?php
	  include('../dbconnect/dbcon.php');

$pmid=$_REQUEST["pmid"];
$cust_id=$_REQUEST["c_id"];
$su_id=0;
//if(cust_id!=null)
//{
 //su_id=Integer.parseInt(cust_id);
//}
$pmi=0;
$pm_id=0;
if($pmid=='')
{
$sql="select max(customer_order_master_id) from    customer_order_master";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

 $pmi=$row[0];
$pmi=$pmi+1;
}
else
{
// pm_id=Integer.parseInt(pmid);

  $pmi=$pmid+0;
}



$dat=date('Y-m-d');
?>

<form name="formID" ID="formID" method="post" action="customer_order_master_insert.php">
 <table class="table table-striped table-bordered table-hover"    >
    <tr>
      <th width="47%" colspan="2">Bill No 
			
        <input name="pmid" type="text" id="pmid" value="<?php echo $pmi; ?>" size="5" readonly=""></th>
      <th width="53%" colspan="3"><div align="right">Date 
            <input name="date" type="text" value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td colspan="2">Cutomer
        <select name="customer_id" id="customer_id"  class="validate[required] form-control" >
       
		  <?php
		  $uname=$_SESSION['uname'];
		  $sql1="select * from patient where patient_id='$cust_id'";
		  $res1=mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_array($res1))
			{
		
		?>
		<option value="<?php echo $row1["patient_id"]; ?>" ><?php echo $row1["patient_name"]; ?></option>
		<?php
		}?>
        </select> </td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
     
     
    
    
   
    </tr>
    <tr>
     
   
 
    </tr>
  </table>
  <p>&nbsp;  </p>
 <table class="table table-bordered table-hover tablesorter"  id="demo-dtable-01"  >
    <tr>
      <th>Sl NO</th>
      <th>Raw Material Name </th>
     
      <th>Test Name </th>
      <th>Charges</th>
      <!--  <th>Cancel</th> -->
    </tr>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		 $sql3="select * from  customer_order_details pd, test_service p where pd.product_id=p.test_service_id and pd.customer_order_master_id='$pmid' ";
		 $res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
		{
		$slno=$slno+1;
		$pur_id=$row3["customer_order_master_id"];
		$pid=$row3["product_id"];
		
		 $qnt=$row3["quantity"];
		// $rate=$row3["rate"];
		// $dic=$row3["discount"];
		 $pname=$row3["test_service_name"];
		 
		// $tot=($rate*$qnt);
		// $discount=$discount+$dic;
		// $total=$total+$tot;
		// $vat=($total*18)/118;
		// $gtotal=($total+$vat)-$discount;?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
    
      <td>&nbsp;<?php echo $row3['test_service_name']; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
	  <!-- <td>&nbsp;<a href="pur details_delete.php?pur_id=<?php echo $pur_id; ?>&pmid=<?php echo $pmid; ?>&cust_id=<?php echo $cust_id; ?>&p_id=<?php echo $pid; ?>&qnt=<?php echo $qnt; ?>" title=" <?php echo $slno; ?>" >Delete</a></td> -->
   
	<?php
	$tot=$tot+$qnt;
	}?>
	 </tr>
     <tr>
      <td>d</td>
      <td></td>
     
      <td></td>
      <td></td>
       <!--  <td>Cancel</td> -->
    </tr>
     <tr>
       <td>&nbsp;</td>
       <td></td>
       <td>Total</td>
       <td><?php echo $tot; ?></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td></td>
       <td>Gst</td>
       <td><?php echo  $gst=$tot*(18/100) ;?></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td></td>
       <td>Total Amount </td>
       <td>&nbsp;<?php echo $tot+$gst; ?></td>
     </tr>
  </table>

</form>
<input type="button" onclick="printDiv('printableArea')" value="print"  />

                    </div>
                </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
	                </div>
            </div>
     
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <?php include('footer.php'); ?>
