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
					<div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Students</span>
                            <a href="addStudents.php" class="btn btn-sm btn-secondary float-right"> add student</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Reg Number</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th>Erolled On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Collins Jumah</td>
                                        <td>IN16/20269/15</td>
                                        <td>+254790366848</td>
                                        <td>collins@gmail.com</td>
                                        <td>Web Design & Development</td>
                                        <td>19th Sept 2022</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-success btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</div>
			
		</div>
	</div>
	
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>