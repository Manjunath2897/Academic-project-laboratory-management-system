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
										<h2>Test Category  Form </h2>
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
<form name="form1" form id="formID" method="post" action="test_category_insert.php">
  <p>&nbsp;</p>
  <table width="493" height="244" border="0" align="center">
    <tr>
      <td>test category name </td>
      <td><input name="test_category_name" type="text" id="test_category_name" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>test category description</td>
      <td><textarea name="test_category_description" id="test_category_description" class="form-control validate[required]"></textarea></td>
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

     <?php include('val.php'); ?>
</body>

</html>


