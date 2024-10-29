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
										<h2>Vehicle Rating Form </h2>
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
<form name="form1" method="post" action="Rating_deatils_insert.php">
  <p></p>
  <table width="438" height="196" border="0" align="center">
    <tr>
      <td width="88" height="36">Vehicle NO</td>
      <td width="340"><select name="vehicle_id" id="vehicle_id" class="form-control">
        <option>select</option>
        <?php
		include('../dbconnect/dbconn.php');
	    $sql="select * from vehicle_details";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['vehicle_id'];?>"><?php echo $row['Vehicle_no'];?></option>
        <?php
		
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="39">Rating</td>
      <td><input name="Rating" type="text" class="form-control" id="Rating"></td>
    </tr>
    <tr>
      <td height="34" colspan="2">
      
            <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                              
          &nbsp;&nbsp;&nbsp;&nbsp;
           <button type="reset" class="btn btn-danger notika-btn-danger">Reset</button>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<!-- Start Footer area-->
     <?php include('footer.php'); ?>
</body>

</html>
