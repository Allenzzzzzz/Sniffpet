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
    </nav>

<div class="login" style="width: 650px; height: 300px; background-color: white; position: absolute; margin-top: 400px; margin-left: 600px; transform: translate(-50%,-50%);">
	<div class="alert alert-info"><strong>Login your account here...</strong></div>
	<form style="padding: 5px;" autocomplete="off" action="member_login.php" method="POST">
		<label class="control-label"><b>Username</b></label>
		<input type="text" name="username" placeholder="Enter Username" required="required" class="form-control" style="margin-bottom: 5px;">
		<label class="control-label"><b>Password</b></label>

		<input type="password" name="password" placeholder="Enter Password" required="required" class="form-control"><br>
    <a href="Registration.php" style="color:blue;">Not yet a member?</a>
    <button type="submit" class="btn btn-primary" style="width: 100px; float: right;"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
	</form>
</div>
</body>
</html>
