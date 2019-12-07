<?php

include ('../includes/dbconn.php');
include ('../includes/header.php');

$query = $_POST['search'];

if(isset($query)){

    $sql = mysqli_query($dbconn, "SELECT * FROM `forum` WHERE `name` LIKE '$query'");

    if($sql["num_rows"] > 0){

        while($get_row = mysqli_fetch_assoc($sql)){

        $get_name = $get_row['name'];

        }

    }

    else{

       echo 'No search result';

    }

}



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

<header class="masthead1">

        <section class="portfolio" id="community">

            <div class="container">

              <form class="form-inline nav-link my-2 my-lg-0 mr-lg-2" action="search.php" method="POST">

                <div class="input-group">

                    <input class="form-control" type="text" placeholder="Search for..." name="search">

                    <span class="input-group-append">

    <button class="btn btn-primary" type="submit">

      <i class="fa fa-search"></i>

    </button>

  </span>

                </div>

            </form>

                <ul class="nav nav-tabs" role="tablist">

                    <li class="nav-item">

                        <a class="nav-link active" data-toggle="tab" href="#status">Status</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" data-toggle="tab" href="#photo">Photo/Video</a>

                    </li>

                </ul>

                <div class="tab-content">

                    <div id="status" class="container tab-pane active"><br>

                        <form action="query.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <textarea class="form-control" rows="5" id="text" name='text' placeholder="Feel free to share your knowledge" required></textarea>

                            </div>

                            <div class="form-inline">

                                <div class="form-inline">

                                    <i class="fa fa-user-circle-o" style="font-size:44px; color:DodgerBlue">

        <input type="text" class="form-control" id="tags" placeholder="Enter your name" name="tags">

          <button type="submit" class="btn btn-primary" style="background-color: #31296a;" id="pst" name='pst'>Post</button>

        </i>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div id="photo" class="container tab-pane fade"><br>

                        <form action="upload.php" method="post" enctype="multipart/form-data" id="form_post">

                            <div class="form-group">

                                <textarea class="form-control" rows="5" id="text" name='text' placeholder="Feel free to share your knowledge" required></textarea>

                            </div>

                            <div class="form-group card">

                                <div class="input-group card-body">

                                        <input class="form-control" type="file" id="file" name="file" accept=".jpg, .jpeg, .png, .gif, .mp4" onchange="readURL(this); validate(this.value)">

                                        <span class="input-group-append">

                <button class="btn btn-danger" type="button" id="clear" name="clear" onclick="reset($('#file')); $('#preview').html('')">Remove</button>

              </span>

                                    <div class="container">

                                        <p id="err" style="color:red"></p>

                                    </div>

                                    <div class="container" id="preview">

                                    </div>

                                </div>

                            </div>

                            <div class="form-inline">

                                <div class="form-inline">

                                    <i class="fa fa-user-circle-o" style="font-size:44px; color:DodgerBlue">

        <input type="text" class="form-control" id="tags" placeholder="Enter your name" name="tags">

          <button type="submit" class="btn btn-primary" id="pst" name='pst'>Post</button>

        </i>

                                </div>

                            </div>

                        </form>

                    </div>

                </div><br />

                    <?php

                    include ('../includes/dbconn.php');

                    $time = time();

                    $query = $_POST['search'];

                    if(isset($query)){

                    $get = mysqli_query($connection, "SELECT * FROM `forum` WHERE `name` LIKE '$query' ORDER BY `forum`.`time` DESC");

                    if($get->num_rows > 0){

                    while($get_row = mysqli_fetch_assoc($get)){

                	$get_name = $get_row['name'];

                	$get_time = $get_row['time'];

                	$get_text = $get_row['text'];

                	$get_date = $get_row['date'];

                	$diff = $time-$get_time;

                switch(1)

                {

                	case($diff<60):

                	$count = $diff;

                	if($count==1){

                		$suffix = "second";

                	}

                	else

                	{

                		$suffix = "seconds";

                	}

                	break;

                	case($diff>60&&$diff<3600):

                	$count = floor($diff/60);

                	if($count==1){

                		$suffix = "minute";

                	}

                	else

                	{

                		$suffix = "minutes";

                	}

                	break;

                	case($diff>3600&&$diff<86400):

                	$count = floor($diff/3600);

                	if($count==1)

                	{

                		$suffix = "hour";

                	}

                	else

                	{

                		$suffix = "hours";

                	}

                	break;

                	case($diff>86400&&$diff<604800):

                	$count = floor($diff/86400);

                	if($count==1)

                	{

                		$suffix = "day";

                	}

                	else

                	{

                		$suffix = "days";

                	}

                	break;

                	case($diff>604800&&$diff<2629743):

                	$count = floor($diff/2629743);

                	if($count==1)

                	{

                		$suffix = "week";

                	}

                	else

                	{

                		$suffix = "weeks";

                	}

                	break;

                	case($diff>2629743&&$diff<31556926):

                	$count = floor($diff/2629743);

                	if($count==1)

                	{

                		$suffix = "month";

                	}

                	else

                	{

                		$suffix = "months";

                	}

                	break;

                	case($diff>31556926):

                	$count = floor($diff/31556926);

                	if($count==1)

                	{

                		$suffix = "year";

                	}

                	else

                	{

                		$suffix = "years";

                	}

                	break;

                }

                        if($suffix=="hours"||$suffix=="day"||$suffix=="days"||$suffix=="month"||$suffix=="months"||$suffix=="year"||$suffix=="years"){

                        $date=date_create($get_date);

                        echo "<br>" . $get_text . "<br>";

                        echo "By: " . ucwords($get_name) . "<br>";

                        echo "Posted: " .date_format($date,"F d, Y"). "<br>";

                        echo "<hr>" ."</hr>";

                        }

                        else{

                            echo "<br>" . $get_text . "<br>";

                            echo "By: " . ucwords($get_name) . "<br>";

                            echo "Posted: " . $count . " " . $suffix . " ago" . "<br>";

                            echo "<hr>" ."</hr>";

                        }

                    }

                }

                    else{

                       echo 'No search result';

                    }

                }

                mysqli_close($connection);

                ?>

</body>
</html>
