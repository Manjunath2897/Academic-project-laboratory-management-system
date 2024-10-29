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
										<h2>Technician Details </h2>
										<p>Welcome to Admin </p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="technician_form.php" class="btn btn-success">Add  New Technician </a>								</div>
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
                            <h2>Technician Details</h2>
                            <p>View rating information details.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
							<thead>
    <tr>
      <td>sl no </td>
      <td>test service Name</td>
      <td>technician name</td>
      <td>specialization name </td>
      <td>email id </td>
      <td>contact no </td>
      <td>address</td>
      <td>edit</td>
      <td>delete</td>
    </tr>
	</thead>
	<tbody>
		 <?php
  $sl=1;
  include('../dbconnect/dbcon.php');
  $sql="select * from technician tc,test_service ts,specialization s where tc.test_service_id=ts.test_service_id and tc.specialization_id=s.specialization_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
   
  ?>
    <tr>
      <td><?php echo $sl++; ?></td>
      <td><?php echo $row['test_service_name']; ?></td>
      <td><?php echo $row['technician_name']; ?></td>
      <td><?php echo $row['specialization_name']; ?></td>
      <td><?php echo $row['email_id']; ?></td>
      <td><?php echo $row['contact_no']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><a href="technician_edit.php?technician_id=<?php echo $row['technician_id'];?>" class="btn btn-info">Edit</a></td>
	  <td><a href="technician_delete.php?technician_id=<?php echo $row['technician_id'];?>" class="btn btn-danger">Delete</a></td>
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

