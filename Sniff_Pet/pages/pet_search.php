<?php

include ('../includes/dbconn.php');
include ('../includes/header.php');
include ('../pages/auth.php');

?>
<html>
<body>
  <?php
    require_once('../includes/dbconn.php');
    $user = $_SESSION['username'];
    $query = "SELECT * FROM members WHERE username = '$user'";
    $result = mysqli_query($connection,$query)or die(mysqli_error($connection));

    while ($row = mysqli_fetch_assoc($result))
    {
      $owner = $row['client_name'];
      $address = $row['address'];
  ?>
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



<div class="indexForm" style="width: 1500px; height: 610px; position: absolute; top: 17.5%; left: 0px; background-color: white; ">
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
    <div style="padding: 5px; margin-top: 30px; position: absolute; top: 2.3%; margin-left: 25px; background-color: rgb(52,58,64);">
        <div class="alert alert-success" style="width: 1300px; height: 500px; background-color: white;">
            <div class="alert alert-info" style="color: black;"><strong>List of Owned Pet:</strong></div>
            <form action="search.php" style="float:right;">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>

            </form>
            <a href="delete_pet.php?id=<?php echo $row['pet_id']; ?>" class="btn btn-danger" style="background-color: #31296a; margin-left:14px;">Delete</a>
            <a href="delete_pet.php?id=<?php echo $row['pet_id']; ?>" class="btn btn-danger" style="background-color: #31296a; margin-left:14px;">Update</a>

            <table class="table table-bordered table-hover table-condensed" id="myTable" style="margin-top:15px; border:none;">
                <thead>
                    <tr class="info">
                        <th><p align="center">ID</p></th>
                        <th><p align="center">Pet Name</p></th>
                        <th><p align="center">Pet Type</p></th>
                        <th><p align="center">Pet Breed</p></th>
                        <th><p align="center">Pet Age</p></th>

                    </tr>
                </thead>
                <tbody>


                  <?php
                    require_once "../includes/dbconn.php";

                    $query = "SELECT * FROM pets WHERE pet_owner = '$owner' ORDER BY pet_id ASC";

                    $query = $_POST['search'];

                      if(isset($query)){

                          $sql = mysqli_query($dbconn, "SELECT * FROM `pets` WHERE `pet_name` LIKE '$query'");

                          if($sql["num_rows"] > 0)
                          {

                              while($get_row = mysqli_fetch_assoc($sql)){

                              $get_name = $get_row['pet_name'];

                              }



                          else{

                             echo 'No search result';

                          }


                      ?>

                            <tr>
                                <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_id']; ?></td>
                                <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_name']; ?></td>
                                <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_type']; ?></td>
                                <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['breed']; ?></td>
                                <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['age']; ?></td>
                                  </td>
                            </tr>
                            <?php
                          }

                          ?>

                </tbody>

                </tr>
            </table>
        </div>
    </div>
</div>
<?php
  }

?>

</script>
</body>

</html>
