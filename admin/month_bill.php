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
	<?php  include('cal.php'); ?>
    <!-- Mobile Menu end -->
   
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
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Bill Details </h2>
										<p>Today Bills</span></p>
										 <form name="form1" method="post" action="month_bill.php">
			    <table  lass="table table-striped">
                  <tr>
                    <td>Select From Date: </td>
                    <td><?php					
      $date_default =date('Y-m-d');
     
     



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
                    <td>Select To Date : </td>
                    <td><?php					
      
         $date_default =date('Y-m-d');
    


	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1900, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
                    <td><input type="submit" name="Submit" value="Submit"></td>
                  </tr>
                </table>
		            			  </form>
			  <?php
			  $date1=$_POST['date1'];
			  $date2=$_POST['date2'];
			  ?>
			   <b>From Date : <?php echo $date1; ?>&nbsp;&nbsp; To Date : <?php echo $date2; ?></b>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<!-- <a href="appointment_form.php" class="btn btn-success">Add  New Appontment </a> -->		</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Bill Details</h2>
                            
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
							<thead>
 
    <th>ID</th>
    <th>Date</th>
    <th>Customer Name </th>
    <th>More</th>
    <th>Delete</th>
  </tr>
    </thead>
  <tbody>
   <?php
 
  include('../dbconnect/dbcon.php');
  $uname=$_SESSION['uname'];
  $sql=" select * from customer_order_master com,patient cd where com.customer_id=cd.patient_id and com.date between '$date1' and '$date2' ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td>&nbsp;<?php echo $row['customer_order_master_id'];?></td>
    <td>&nbsp;<?php echo $row['date'];?></td>
    <td>&nbsp;<?php echo $row['patient_name'];?></td>
    <td>&nbsp;<a href="bill_details_more.php?pmid=<?php echo $row['customer_order_master_id'];?>&c_id=<?php echo $row['patient_id'];?>" class="btn btn-info">More</a></td>
    <td>&nbsp;<a href="customer_order_master_delete.php?com_id=<?php echo $row['customer_order_master_id'];?>"onClick="return confirm('Are you sure want to delete')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a></td>
  </tr>
  <?php
  }
  ?>
 </tbody>
  </table> 
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <?php include('footer.php'); ?>
