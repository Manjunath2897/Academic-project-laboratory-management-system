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
    <!-- Main Menu area End-->
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
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Test Report Master Edit  Form </h2>
										<p>Welcome to <span class="bread-ntd">Admin </span></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
	 <?php
	 include('../dbconnect/dbcon.php');
	 $test_report_master_id=$_REQUEST['test_report_master_id'];
	 $sql="select * from  test_report_master where test_report_master_id='$test_report_master_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
<form name="form1" form id="formID" method="post" action="test_report_master_update.php">
<input type="hidden" name="test_report_master_id" value="<?php echo $row['test_report_master_id'];?>">
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="522" height="170" border="0" align="center">
    <tr>
      <td width="176">patient id </td>
      <td width="197"><select name="patient_id" id="patient_id" class="form-control validate[required]">
        <option value="">select</option>
        <?php
		 include('../dbconnect/dbcon.php');
  $sql1="select * from  patient";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['patient_id'];?>" <?php if($row1['patient_id']==$row['patient_id']) { ?> selected <?php } ?>><?php echo $row1['patient_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>date</td>
      <td><input name="date" type="text" id="date" value="<?php echo $row['date'];?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
   
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
      <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>
      </div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<!-- Start Footer area-->
     <?php include('footer.php'); ?>
</body>

</html>
