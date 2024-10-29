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
										<h2>Specialization Edit Form </h2>
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
	 $specialization_id=$_REQUEST['specialization_id'];
	 $sql="select * from  specialization where specialization_id='$specialization_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
<form name="form1" form id="formID" method="post" action="specialization_update.php">
<input type="hidden" name="specialization_id" value="<?php echo $row['specialization_id'];?>">
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="705" height="268" border="1" align="center">
    <tr>
      <td width="176">specialization name </td>
      <td width="197"><input name="specialization_name" type="text" id="specialization_name" value="<?php echo $row['specialization_name']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>description</td>
      <td><input name="description" type="text" id="description" value="<?php echo $row['description']; ?>" class="form-control validate[required]"></td>
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
