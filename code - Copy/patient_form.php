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
										<h2>Patient Form </h2>
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
<form id="formID" form action="patient_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <p>&nbsp;</p>
  <table width="446" height="674" border="0" align="center">
    <tr>
      <td>Patient name </td>
      <td><input name="patient_name" type="text" id="patient_name" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>D O B </td>
      <td><input name="date_of_birth" type="text" id="date_of_birth" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Patient gender </td>
      <td><input name="radiobutton" type="radio" value="radiobutton" class="form-control validate[required]">      
        male  
          <input name="radiobutton" type="radio" value="radiobutton" class="form-control validate[required]">
          female
          <input name="radiobutton" type="radio" value="radiobutton" class="form-control validate[required]">
      others</td></tr>
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Mobile no</td>
      <td><input name="mobile_no" type="text" id="mobile_no" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Email id </td>
      <td><textarea name="email_id" id="email_id" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Patient number</td>
      <td><input name="patient_number" type="text" id="patient_number" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>Patient photo </td>
      <td><input name="patient_photo" type="file" id="patient_photo" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
      <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>    </tr>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<!-- Start Footer area-->
     <?php include('footer.php'); ?>
</body>

</html>

