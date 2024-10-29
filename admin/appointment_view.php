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
										<h2>Appointment Details </h2>
										<p>Welcome to  <span class="bread-ntd">Admin </span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<!-- <a href="appointment_form.php" class="btn btn-success">Add  New Appontment </a>	 -->	</div>
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
                            <h2>Appointment Details</h2>
                            <p>View rating information details.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
							<thead>
    <tr>
	<th>serial number</th>
      <th>patient  </td>
      <th>test service </th>
      <th>appointment date </th>
      <th>appointment time </th>
      <th>description</th>
	       
      <th> status </th>

	  <th>Add Reports </th>
	  <th>Action</th>
<!--       <th>edit</th>
      <th>delete</th> -->
    </tr>
	</thead>
	<tbody>
	 <?php
  $sl=1;
  include('../dbconnect/dbcon.php');
  $sql="select * from appointment a,patient p,test_service ts where a.patient_id=p.patient_id and a.test_service_id=ts.test_service_id ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
   
  ?>
    <tr>
      <td><?php echo $sl++; ?></td>
      <td><?php echo $row['patient_name']; ?></td>
      <td><?php echo $row['test_service_name']; ?></td>
      <td><?php echo $row['appointment_date']; ?></td>
      <td><?php echo $row['appointment_time']; ?></td>
      <td><?php echo $row['description']; ?></td>
	 
      <td><p class="btn btn-warning"><?php echo $row['appointment_status']; ?></p></td>
      
	  <td>&nbsp;<?php if($row['appointment_status']=='Pending') {  ?>Plase Confrim Appointment  <?php } else { ?> <a href="Customer_order_master_form.php?c_id=<?php echo $row['patient_id']; ?>" class="btn btn-primary">Add Report</a><?php } ?></td>
	  <td> <a href="appointment_confirm.php?appointment_id=<?php echo $row['appointment_id']; ?>" class="btn btn-info">Confrim</a> <hr>
	  <a href="appointment_cancel.php?appointment_id=<?php echo $row['appointment_id']; ?>" class="btn btn-danger">Cancel</a></td>
	 <!--  <td><a href="appointment_edit.php?appointment_id=<?php echo $row['appointment_id'];?>" class="btn btn-info">Edit</a></td> -->
	 <!--    <td><a href="appointment_delete.php?appointment_id=<?php echo $row['appointment_id'];?>" class="btn btn-danger">Delete</a></td> -->
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
