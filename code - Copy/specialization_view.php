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
										<h2>Specialization Details </h2>
										<p>Welcome to  <span class="bread-ntd">Admin </span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="specialization_form.php" class="btn btn-success">Add  New Specialization </a>								</div>
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
                            <h2>Specialization Details</h2>
                            <p>View rating information details.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
							<thead>
    <tr>
      <td>sl no </td>
      <td>specialization name</td>
      <td>description</td>
      <td>edit</td>
      <td>delete</td>
    </tr>
	</thead>
	<tbody>
		 <?php
  $sl=1;
  include('../dbconnect/dbcon.php');
  $sql="select * from specialization";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
   
  ?>
    <tr>
      <td><?php echo $sl++; ?></td>
      <td><?php echo $row['specialization_name']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><a href="specialization_edit.php?specialization_id=<?php echo $row['specialization_id'];?>">Edit</a></td>
	  <td><a href="specialization_delete.php?specialization_id=<?php echo $row['specialization_id'];?>">Delete</a></td>
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

