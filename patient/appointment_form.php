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
										<h2>Appointment Form </h2>
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
	<?php include('cal.php'); ?>
	<!-- Breadcomb area End-->
<form name="form1" id="formID" method="post" action="appointment_insert.php">
  <table width="413" height="404" border="0" align="center">
    <tr>
      <td>Patient name </td>
      <td><select name="patient_id" size="1" id="patient_id" class="form-control validate[required]">
       
        <?php
		$uname=$_SESSION['uname'];
		 include('../dbconnect/dbcon.php');
  $sql="select * from  patient where patient_number='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['patient_id'];?>"><?php echo $row['patient_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>Test Service name </td>
      <td><select name="test_service_id" size="1" id="test_service_id" class="form-control validate[required]">
        <option value="">Select Test service</option> 
  <?php include('../dbconnect/dbcon.php');
  $sql="select * from  test_service";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
        <option value="<?php echo $row['test_service_id'];?>"><?php echo $row['test_service_name'];?></option>
        <?php
  }
		?>
      </select></td>
    </tr>
    <tr>
      <td>Appointment Date </td>
      <td>
	  
<?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d+1');
      $year=date('Y')+10;
	  $syear=date('Y');



	  $myCalendar = new tc_calendar("b_date", true, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$date_default","$year-01-01");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2021, $year);
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?>	  
	  </td>
                    
    </tr>
    <tr>
      <td>Appointment Time </td>
      <td><input name="appointment_time" class="form-control validate[required]" type="time" id="appointment_time"></td>
    </tr>
    <tr>
      <td>Description </td>
      <td><textarea name="description" class="form-control validate[required]" id="description"></textarea></td>
    </tr>
   
 
    <tr>
      <td><button type="submit" name="Submit" class="btn btn-primary" >Submit</button></td>
      <td><button type="reset" name="Reset" class="btn btn-danger" >Reset</button></td>
    </tr>
  </table>
   <div align="center"></div>
   <p>&nbsp;</p>
</form>
<!-- Start Footer area-->
     <?php include('footer.php'); ?>
</body>

</html>
