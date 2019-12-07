<?php

    include 'dbconn.php';

    $time = time();

    $date = getdate();

    $get = mysqli_query($connection, "SELECT * FROM `forum` ORDER BY `forum`.`time` DESC");

    while($get_row = mysqli_fetch_assoc($get)){

	$get_id = $get_row['id'];

	$get_name = $get_row['name'];

    $get_file = $get_row['files'];

	$get_time = $get_row['time'];

	$get_text = $get_row['text'];

	$get_date = $get_row['date'];

	$diff = $time-$get_time;

    $target = "images/".$get_file;

    $FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

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

        if($FileType == "mp4"){

        if($suffix=="day"||$suffix=="days"||$suffix=="month"||$suffix=="months"||$suffix=="year"||$suffix=="years"){

        $date=date_create($get_date);

            echo "<div class='card card-body bg-light'>";

            echo "<video class='mx-auto d-block' style='width:70%' controls src='images/".$get_file."' >

            </video>";

            echo "<br>" . "<p>" . "<strong>". ucwords($get_name) . "</strong>" . " " . $get_text . "<br>" . "<small style='color:gray'>" . date_format($date,"F d, Y") . "</small>" . "</p>";

            echo '</div><br />';

        }



        else{

            echo "<div class='card card-body bg-light'>";

            echo "<video class='mx-auto d-block' style='width:70%' controls src='images/".$get_file."' >

            </video>";

            echo "<br>" . "<p>" . "<strong>". ucwords($get_name) . "</strong>" . " " . $get_text . "<br>" . "<small style='color:gray'>" . $count . " " . $suffix . " ago" . "</small>" . "</p>";

            echo '</div><br />';

        }

        }

        else if($FileType == "jpg" || $FileType == "jpeg" || $FileType == "png" || $FileType == "gif"){

        if($suffix=="day"||$suffix=="days"||$suffix=="month"||$suffix=="months"||$suffix=="year"||$suffix=="years"){

        $date=date_create($get_date);

            echo "<div class='card card-body bg-light'>";

            echo "<a class='example-image-link' href='images/".$get_file."' data-lightbox='example-".$get_id."' data-title='<p>".'<strong style="color:red">'.ucwords($get_name).'</strong>'.' '.$get_text.'<br>'.'<small style="color:gray">'. date_format($date,"F d, Y") . '</small>' ."</p>'>";

            echo "<img class='img-thumbnail mx-auto d-block example-image' style='max-width:70%; height:auto' src='images/".$get_file."'>";

            echo "</a>";

            echo "<br>" . "<p>" . "<strong>". ucwords($get_name) . "</strong>" . " " . $get_text . "<br>" . "<small style='color:gray'>" . date_format($date,"F d, Y") . "</small>" . "</p>";

            echo '</div><br />';

        }



        else{

            echo "<div class='card card-body bg-light'>";

            echo "<a class='example-image-link' href='images/".$get_file."' data-lightbox='example-".$get_id."' data-title='<p>".'<strong style="color:red">'.ucwords($get_name).'</strong>'.' '.$get_text.'<br>'.'<small style="color:gray">'. $count . ' ' . $suffix . ' ago' . '</small>' ."</p>'>";

            echo "<img class='img-thumbnail mx-auto d-block example-image' style='max-width:70%; height:auto' src='images/".$get_file."'>";

            echo "</a>";

            echo "<br>" . "<p>" . "<strong>". ucwords($get_name) . "</strong>" . " " . $get_text . "<br>" . "<small style='color:gray'>" . $count . " " . $suffix . " ago" . "</small>" . "</p>";

            echo '</div><br />';

        }

        }

        else{

            if($suffix=="day"||$suffix=="days"||$suffix=="month"||$suffix=="months"||$suffix=="year"||$suffix=="years"){

            $date=date_create($get_date);

            echo "<div class='card card-body bg-light'>";

            echo "<br>" . "<p>" . "<strong>". ucwords($get_name) . "</strong>" . " " . $get_text . "<br>" . "<small style='color:gray'>" . date_format($date,"F d, Y") . "</small>" . "</p>";

            echo '</div><br />';

        }



        else{

            echo "<div class='card card-body bg-light'>";

            echo "<br>" . "<p>" . "<strong>". ucwords($get_name) . "</strong>" . " " . $get_text . "<br>" . "<small style='color:gray'>" . $count . " " . $suffix . " ago" . "</small>" . "</p>";

            echo '</div><br />';

        }

        }

}

mysqli_close($connection);

?>
_
