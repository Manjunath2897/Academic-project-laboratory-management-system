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
										<h2>Test Category Edit  Form </h2>
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
	 $test_category_id=$_REQUEST['test_category_id'];
	 $sql="select * from  test_category where test_category_id='$test_category_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
<form name="form1" form id="formID" method="post" action="test_category_update.php">
<input type="hidden" name="test_category_id" value="<?php echo $row['test_category_id'];?>">
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="620" height="271" border="1" align="center">
    <tr>
      <td width="176">test category name </td>
      <td width="197"><input name="test_category_name" type="text" id="test_category_name" value="<?php echo $row['test_category_name']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>test category description </td>
      <td><textarea name="test_category_description" id="test_category_description" class="form-control validate[required]"><?php echo $row['test_category_description']; ?></textarea></td>
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
