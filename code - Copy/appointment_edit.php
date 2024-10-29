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
										<h2>Appointment Edit Form</h2>
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
	 $appointment_id=$_REQUEST['appointment_id'];
	 $sql="select * from  appointment where appointment_id='$appointment_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
	 <?php include('val.php'); ?>
<form id="formID" name="form1" method="post" action="appointment_update.php">
<input type="hidden" name="appointment_id" value="<?php echo $row['appointment_id'];?>">
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="706" height="730" border="0" align="center">
    <tr>
      <td width="176">patient name </td>
      <td width="197"><select name="patient_id" size="1" id="patient_id" class="form-control validate[required]">
        <option value="">Select Patient</option>
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
      <td>test service name </td>
      <td><select name="test_service_id" size="1" id="test_service_id" class="form-control validate[required]">
        <option value="">select test service</option>
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
      <td>appointment date </td>
      <td><input name="appointment_date" type="text" id="appointment_date" value="<?php echo $row['appointment_date']; ?>" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>appointment time </td>
      <td><input name="appointment_time" type="text" id="appointment_time" value="<?php echo $row['appointment_time']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>description</td>
      <td><textarea name="description" id="description" class="form-control validate[required]"><?php echo $row['description']; ?></textarea></td>
    </tr>
    <tr>
      <td>Appointment status </td>
      <td><input name="appointment_status" type="text" id="appointment_status" value="<?php echo $row['appointment_status']; ?>" class="form-control validate[required]" ></td>
    </tr>
    <tr>
      <td>technician name </td>
      <td><select name="technician_id" size="1" id="technician_id" class="form-control validate[required]">
        <option value="">select technician</option>
        <?php
		 include('../dbconnect/dbcon.php');
  $sql1="select * from  technician";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['technician_id'];?> " <?php if($row1['technician_id']==$row['technician_id']) { ?> selected <?php } ?>><?php echo $row1['technician_name'];?></option>
        <?php
  }
		?>
      </select></td>
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
