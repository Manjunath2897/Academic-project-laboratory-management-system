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
										<h2>Payment Form </h2>
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
<form name="form1" form id="formID" method="post" action="payment_insert.php">
  <p>&nbsp;</p>
  <table width="447" height="473" border="0" align="center">
    <tr>
      <td width="56">Test report master id </td>
      <td width="144"><select name="test_report_master_id" id="test_report_master_id" class="form-control validate[required]">
	  <option value="">select</option>
	  <?php
		 include('../dbconnect/dbcon.php');
  $sql="select * from  test_report_master";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['test_report_master_id'];?>"><?php echo $row['test_report_master_id'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input name="amount" type="text" id="amount" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="51">Payment type </td>
      <td><input name="payment_type" type="text" id="payment_type" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="28"> Date </td>
      <td><input name="payment_date" type="text" id="payment_date" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td>time</td>
      <td><input name="payment_time" type="text" id="payment_time" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td><p>Payment status</p>
      </td>
      <td><input name="payment_staus" type="text" id="payment_staus" class="form-control validate[required]"></td>
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

