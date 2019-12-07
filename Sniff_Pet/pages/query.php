<?php

include ('../includes/dbconn.php');

$tags = $_POST['tags'];

$text = $_POST['text'];

$pst = $_POST['pst'];

$time = time();

$time_check = $time-600;

$date = date('Y-m-d H:i:s');

if(isset($pst)){

    if($tags==""){

        $sql = "INSERT INTO `forum`(`name`, `text`, `time`, `date`) VALUES ('anonymous', '$text', '$time', '$date')";

        if (mysqli_query($connection, $sql)) {

                echo '<script type="text/javascript">';

                echo 'window.location.href="forum.php";';

                echo '</script>';

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($connection);

        }

    }

    else{

        $sql = "INSERT INTO `forum`(`name`, `text`, `time`, `date`) VALUES ('$tags', '$text', '$time', '$date')";

        if (mysqli_query($connection, $sql)) {

                echo '<script type="text/javascript">';

                echo 'window.location.href="forum.php";';

                echo '</script>';

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($connection);

        }

    }

    }

?>
