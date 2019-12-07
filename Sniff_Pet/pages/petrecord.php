<?php
include('../includes/header.php');
 ?>
    <html>

    <body>

        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
            <div class="container"><a class="navbar-brand" href="index.php" style="color: white;width: 98; margin-left:-70px; margin-top: 10px; font-size:30px;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto text-uppercase">
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="record.php">Records</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="forum.php">Forum</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="schedule.php">Appointment</a></li>
                        <div class="dropdown">
                            <button class="dropbtn" style="text-transform:uppercase; margin-top: -.5px;">Account</button>
                            <div class="dropdown-content">
                              <a href="#">Profile</a>
                              <a href="#about">About</a>
                              <a href="#">Log out</a>
                            </div>
                          </div>

                    </ul>
                </div>
            </div>
        </nav>


<div class="alert alert-success" style="width: 29%; margin-top:700px;">
<form action="reg_pet.php" method="POST" autocomplete="off" enctype="multipart/form-data">
  <label>Choose Image</label>
  <input type="file" name="image" class="form-control" required="required">
  <label>Pet Name</label>
  <input type="text" name="pname" class="form-control" placeholder="Enter Pet Name" required="required">
  <label>Pet Type</label>
  <input type="text" name="ptype" class="form-control" placeholder="Enter Pet Type" required="required">
  <label>Pet Breed</label>
  <input type="text" name="pbreed" class="form-control" placeholder="Enter Pet Breed" required="required">
  <label>Gender</label>
  <select class="form-control" required="required" name="gender">
    <option value=""></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
  <label>Pet Age</label>
  <input type="text" name="age" class="form-control" placeholder="Enter Age" required="required"><br>
  <input type="hidden" name="oname" class="form-control" value="<?php echo $row['client_name']; ?>" required="required">
  <input type="hidden" name="oadd" class="form-control" value="<?php echo $row['address']; ?>">
  <input type="submit" name="btnRegPet" class="btn btn-success form-control" value="Register Pet"><br>
</form>
</div>

</body>

</html>
