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
										<h2>Rating Details</h2>
										<p>Welcome to  <span class="bread-ntd">Admin </span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="Rating_deatils_form.php" class="btn btn-success">Add  New Rating</a>								</div>
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
                            <h2>Rating Details</h2>
                            <p>View rating information details.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
							<thead>
    <tr>
      <th width="89" height="26">rating_id</th>
      <th width="115">Vehicle No</th>
      <th width="79">Rating</th>
      <th width="79">Edit</th>
      <th width="79">Delete</th>
    </tr>
	</thead>
	<tbody>
	<?php
  include('../dbconnect/dbconn.php');
  
 $sql="select * from rating_details r ,vehicle_details v where r.vehicle_id=v.vehicle_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  { 
  
  ?>
    <tr>
      <td>&nbsp;<?php echo $row['rating_id']; ?></td>
      <td>&nbsp;<?php echo $row['Vehicle_no']; ?></td>
      <td>&nbsp;<?php echo $row['Rating']; ?></td>
      <td><a href="Rating_deatils_edit.php?rating_id=<?php echo $row['rating_id']; ?>">Edit</a></td>
      <td><a href="Rating_deatils_delete.php?rating_id=<?php echo $row['rating_id']; ?>">Delete</a></td>
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