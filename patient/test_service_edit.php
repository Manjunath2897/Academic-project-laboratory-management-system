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
										<h2>Test Service Edit  Form </h2>
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
	 $test_service_id=$_REQUEST['test_service_id'];
	 $sql="select * from  test_service where test_service_id='$test_service_id'";
	 $res=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($res);
     ?>
<form name="form1" form id="formID" method="post" action="test_service_update.php">
<input type="hidden" name="test_service_id" value="<?php echo $row['test_service_id'];?>">
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="704" height="426" border="1" align="center">
    <tr>
      <td width="176">test category id </td>
      <td width="197"><select name="test_category_id" id="test_category_id" class="form-control validate[required]">
        <option value="">select</option>
        <?php
		 include('../dbconnect/dbcon.php');
  $sql1="select * from  test_category";
  $res1=mysqli_query($conn,$sql1);
  while($row1=mysqli_fetch_array($res1))
  {
  ?>
        <option value="<?php echo $row1['test_category_id'];?>" <?php if($row1['test_category_id']==$row['test_category_id']) { ?> selected <?php } ?>><?php echo $row1['test_category_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>test service name </td>
      <td><input name="test_service_name" type="text" id="test_service_name" value="<?php echo $row['test_service_name']; ?>" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>description</td>
      <td>      <textarea name="description" id="description" class="form-control validate[required]"><?php echo $row['description']; ?></textarea></td>
    </tr>
    <tr>
      <td>amount</td>
      <td><input name="amount" type="text" id="amount" value="<?php echo $row['amount']; ?>" class="form-control validate[required]"></td>
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
