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
										<h2>Test Service Form </h2>
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
<form name="form1" form id="formID" method="post" action="test_service_insert.php">
  <p>&nbsp;</p>
  <table width="530" height="463" border="0" align="center">
    <tr>
      <td>test category name </td>
      <td><select name="test_category_id" id="test_category_id" class="form-control validate[required]">
	  <option value="">select</option>
	  <?php
		 include('../dbconnect/dbcon.php');
  $sql="select * from  test_category";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['test_category_id'];?>"><?php echo $row['test_category_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>test service name </td>
      <td><input name="test_service_name" type="text" id="test_service_name" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>description</td>
      <td><textarea name="description" id="description" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>amount</td>
      <td><input name="amount" type="text" id="amount" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
      <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>    </tr>

    </tr>
  </table>
  <p>&nbsp;  </p>
</form>
<!-- Start Footer area-->
     <?php include('footer.php'); ?>
</body>

</html>



