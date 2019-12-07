<?php

include ('../includes/dbconn.php');

$msg = "";

$tags = $_POST['tags'];

$text = $_POST['text'];

$pst = $_POST['pst'];

$time = time();

$time_check = $time-600;

$date = date('Y-m-d H:i:s');

define('MB', 1048576);

if(isset($pst)){

    $target = "..assets/img/".basename($_FILES['file']['name']);

    $FileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));



    $file = $_FILES['file']['name'];

    $text = $_POST['text'];



    if($file==""){

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



    if($tags==""){

    if ($_FILES['file']['size'] > 150*MB) {

    echo "Sorry, your file is too large.";

    }

    else if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" && $FileType != "mp4") {

    echo "Sorry, only JPG, JPEG, PNG, GIF & MP4 files are allowed.";

    }

    else{

    $sql = "INSERT INTO `forum`(`name`, `files`, `text`, `time`, `date`) VALUES ('anonymous', '$file', '$text', '$time', '$date')";

    if (mysqli_query($connection, $sql)) {

                echo '<script type="text/javascript">';

                echo 'window.location.href="forum.php";';

                echo '</script>';

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($connection);

        }

    }

    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){

        $msg = "Uploaded successfully";

    }

    else{

        $msg = "There was a problem uploading file";

    }

    echo $msg;

    }

    else{

    if ($_FILES['file']['size'] > 150*MB) {

    echo "Sorry, your file is too large.";

    }

    else if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" && $FileType != "mp4") {

    echo "Sorry, only JPG, JPEG, PNG, GIF & MP4 files are allowed.";

    }

    else{

    $sql = "INSERT INTO `forum`(`name`, `files`, `text`, `time`, `date`) VALUES ('$tags', '$file', '$text', '$time', '$date')";

    if (mysqli_query($connection, $sql)) {

                echo '<script type="text/javascript">';

                echo 'window.location.href="forum.php";';

                echo '</script>';

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($connection);

        }

    }

    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){

        $msg = "Uploaded successfully";

    }

    else{

        $msg = "There was a problem uploading file";

    }

    echo $msg;



    }

}





?>
