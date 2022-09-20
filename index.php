<!DOCTYPE html>
<html>
	<?php 
		include('includes/links.php')
	?>
<body>
	<!-- header section   -->
	<?php
		include('includes/header.php')
	?>
	<!-- end header section -->

	<div class="sidebar">
       <?php 
		include('includes/sidebar.php')
	   ?>
	</div>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top Content</span>
					</div>
				</div>
			</div>
			<div class="row pt-4">
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<div class="card-title">Students</div>
						</div>
						<div class="card-body">
							<i class="fa fa-group fa-3x"></i>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<div class="card-title">Available courses</div>
						</div>
						<div class="card-body">
							<i class="fa fa-folder-open fa-3x"></i>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<div class="card-title">Campus</div>
						</div>
						<div class="card-body">
							<i class="fa fa-graduation-cap fa-3x"></i>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<div class="card-title">Users</div>
						</div>
						<div class="card-body">
							<i class="fa fa-user fa-3x"></i>
							<span class="float-right">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
			<div class="row pt-4">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header bg-dark text-center text-white">
							<div class="card-title">Student Analysis</div>
						</div>
						<div class="card-body">
							<i class="fa fa-line-chart fa-2x"></i>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>