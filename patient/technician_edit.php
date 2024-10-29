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
										<h2>Technician Edit  Form </h2>
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
	 $technician_id=$_REQUEST['technician_id'];
	 $sql="select * from  technician where technician_id='$technician_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
<form name="form1" form id="formID" method="post" action="technician_update.php">
<input type="hidden" name="technician_id" value="<?php echo $row['technician_id'];?>">
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="697" height="540" border="1" align="center">
    <tr>
      <td width="176">test service id </td>
      <td width="197"><select name="test_service_id" id="test_service_id" class="form-control validate[required]">
        <option value="">select</option>
        <?php
		 include('../dbconnect/dbcon.php');
  $sql1="select * from  test_service";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['test_service_id'];?>" <?php if($row1['test_service_id']==$row['test_service_id']) { ?> selected <?php } ?>><?php echo $row1['test_service_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>technician name </td>
      <td><input name="technician_name" type="text" id="technician_name" value="<?php echo $row['technician_name']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>specialization id </td>
      <td>        <select name="specialization_id" id="specialization_id" class="form-control validate[required]">
        <option value="">select</option>
        <?php
		 include('../dbconnect/dbcon.php');
  $sql1="select * from  specialization";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['specialization_id'];?>" <?php if($row1['specialization_id']==$row['specialization_id']) { ?> selected <?php } ?>><?php echo $row1['specialization_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>email id </td>
      <td>      <input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>address</td>
      <td><input name="address" type="text" id="address" value="<?php echo $row['address']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
     
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
      <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>      </div></td>
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
