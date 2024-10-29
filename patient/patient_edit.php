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
										<h2>Patient Edit Form</h2>
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
	 $uname=$_SESSION['uname'];
	// $patient_id=$_REQUEST['patient_id'];
	 $sql="select * from  patient where patient_number='$uname'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
<form action="patient_update.php" method="post" enctype="multipart/form-data" name="form1" id="formID" form>
<input type="hidden" name="patient_id" value="<?php echo $row['patient_id'];?>">

  <table width="646" height="455" border="0" align="center">
  
  <tr>
      <td>Photo</td>
      <td><img src="../images/<?php echo $row['patient_photo']; ?>" align='middle' width="60%" ></td>
    </tr>
    <tr>
      <td width="176">patient name </td>
      <td width="197"><input name="patient_name" type="text" id="patient_name" value="<?php echo $row['patient_name']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="date_of_birth" type="text" id="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>patient gender </td>
      <td>        <input name="radiobutton" type="radio" value="radiobutton" <?php if($row['patient_gender']=='Male') { ?> checked <?php } ?>class=" validate[required]">
        male
          <input name="radiobutton" type="radio" value="radiobutton" <?php if($row['patient_gender']=='Female') { ?> checked <?php } ?> class=" validate[required]">
          female
          <input name="radiobutton" type="radio" value="radiobutton" <?php if($row['patient_gender']=='Other') { ?> checked <?php } ?> class=" validate[required]">
      other</td>
    </tr>
    <tr>
      <td>address</td>
      <td>      <input name="address" type="text" id="address" value="<?php echo $row['address']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>mobile no </td>
      <td><input name="mobile_no" type="text" id="mobile_no" value="<?php echo $row['mobile_no']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>email id </td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>patient number </td>
      <td><input name="patient_number" type="text" id="patient_number" value="<?php echo $row['patient_number']; ?>" class="form-control validate[required]"></td>
    </tr>

    <tr>
      
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
     <!--  <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>      </div></td> -->
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
