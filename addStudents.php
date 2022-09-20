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
                            <span><i class="fa fa-pencil"></i> Enroll Student</span>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Please enter your name:</label>
                                            <input type="text" name="name" id=  "name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="registration_number">Please enter your Reg Number:</label>
                                            <input type="text" name="registration_number" id=  "registration_number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Please enter your Phone number:</label>
                                            <input type="tel" name="phone" id=  "phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Your email address:</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="course">Please select your course:</label>
                                            <select name="course" id="course" class="form-control">
                                                <option value="">--select course--</option>
                                                <option value="Web Design & Development">Web Design & Development</option>
                                                <option value="Android Application Development">Android Application Development</option>
                                                <option value="Cyber Security">Cyber Security</option>
                                                <option value="Data Analysis">Data Analysis</option>
                                                <option value="AWS Cloud Certification">AWS Cloud Certification</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                    <button type="submit" class="btn btn-success">Enroll</button>
                                    </div>
                                </div>
                            </form>
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