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
										<h2>Doctor Form </h2>
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
<form name="form1" id="formID" method="post" action="doctor_insert.php">
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <table width="458" height="637" border="0" align="center">
    <tr>
      <td>Doctor name </td>
      <td><input name="doctor_name" type="text" id="doctor_name" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" id="age" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><input name="qualification" type="text" id="qualification" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Email id </td>
      <td><textarea name="email_id" id="email_id" class="form-control validate[required,custom[email]]"></textarea></td>
    </tr>
    <tr>
      <td>Specialization Name </td>
      <td><select name="specialization_id" id="specialization_id" class="form-control validate[required]">
        <option value="">Select specialization</option>
        <?php
		 include('../dbconnect/dbcon.php');
  $sql="select * from  specialization";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['specialization_id'];?>" ><?php echo $row['specialization_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>test service Name </td>
      <td>        <select name="test_service_id" id="test_service_id" class="form-control validate[required]">
          <option value="">Select test service</option>
          <?php
		
  $sql="select * from  test_service";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
          <option value="<?php echo $row['test_service_id'];?>" ><?php echo $row['test_service_name'];?></option>
          <?php
  }
		?>
        </select></td>
    </tr>
    <tr>
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
      <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<!-- Start Footer area-->
     <?php include('footer.php'); ?>
</body>

</html>

