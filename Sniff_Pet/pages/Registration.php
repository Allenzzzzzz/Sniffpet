<?php
include('../includes/header.php');
 ?>

<html>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
        <div class="container"><a class="navbar-brand" href="#page-top" style="color: white;width: 98;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
            </div>
            <div class="login">
            	<form class="ginlog" style="padding: 2px;" autocomplete="off" action="member_login.php" method="POST">
                <input type="text" name="username" placeholder="Enter Username" required="required" class="form-username">
				<input type="password" name="password" placeholder="Enter Password" required="required" class="form-password"><br>
                <button type="submit" class="btn btn-primary" style="width:100px; height:35px; float: right; margin-top:-32px;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</button>
                </form>
            </div>

    </nav>

<div style="height: maxlength; width: maxlength; background-color: #343233; margin-top: 120px; margin-left: px;">
	<div class="alert alert-info"><strong>Not Yet a member? Register Here...</strong></div>
	<div style="padding: 5px;">
		<form action="member_registration.php" method="POST" autocomplete="off">
			<div class="alert alert-success" style="height: maxlength; width: 49%; margin-left: 100px;margin-top: 20px;">
				<div class="alert alert-info"><strong>Personal Information...<span style="float: right;">Registration</span></strong></div>
					<label>First Name</label>
					<input type="text" name="fname" placeholder="Enter First Name" class="form-control" required="required"><br>
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Enter Last Name" class="form-control" required="required"><br>
					<label>Address</label>
					<input type="text" name="address" placeholder="Enter Address" class="form-control" required="required"><br>
					<label>Gender</label>
					<select name="gender" class="form-control" required="required">
						<option value="">Choose Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select><br>
					<label>Contact Number</label>
					<input type="text" name="contact" placeholder="+63" class="form-control" required="required" maxlength="11"><br>
				<div class="alert alert-info"></div>
			</div>
			<div class="alert alert-success" style="height: maxlength; width: 34.7%; position: absolute; top: 26%; margin-top: 48.5px; margin-left: 800px;">
				<div class="alert alert-info"><strong>Account Information...<span style="float: right;">Registration</span></strong></div><br><br>
					<label>Username</label>
					<input type="text" name="username" placeholder="Enter Username" class="form-control" required="required"><br>
					<label>Password</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control" required="required"><br>
					<label>Re-Enter Password</label>
					<input type="password" name="password2" placeholder="Re-Enter Password" class="form-control" required="required"><br><br>
					<label>Register Your Account</label><br>
					<input type="submit" name="btnReg" value="Register Membership" style="color: #fff; background-color: green; width: 49%; padding: 10px;"> <input type="reset" value="Clear Fields" style="background-color: #fb2525; color: #fff; width: 49%; padding: 10px;"><br><br>
				<div class="alert alert-info"></div>
            </div>
		</form>
	</div>

</div>



</body>
</html>
