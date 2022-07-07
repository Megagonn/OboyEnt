<?php
    session_start();

    include('db.php');
    // $image = $_FILES['file'];
    // print_r( $image);
    if (isset($_POST['submit'])) {
        if (empty($_POST['name']) || empty($_POST['about']) || empty($_FILES['file']) || empty($_POST['date'])) {
            $_SESSION['message']= "Please, fill all info";
            $_SESSION['class'] = "alert alert-danger";
            header('location:events.php');
        } else{
            $name = $_POST['name'];
            $about = $_POST['about'];
            $date = $_POST['date'];
            $image = $_FILES['file']['name'];
                
           
            $query = "INSERT into events(artist_name, about, event_date, image_path) VALUES('$name', '$about', '$date', '$image')";
            $save = mysqli_query($connection, $query);
            if ($save) {
                move_uploaded_file($_FILES['file']['tmp_name'], 'assets/'.$image);
                $_SESSION['message']= "Event added successfully";
                $_SESSION['class'] = "alert alert-success";
                header('location:events.php');
            } else {
               
                // echo mysqli_error($connection);
                $_SESSION['message']= "An error occured!";
                $_SESSION['class'] = "alert alert-danger";
                header('location:events.php');
            }
            
            // print_r($event_details);
            // $_SESSION['message']= "Event added successfully";
            // $_SESSION['class'] = "alert alert-success";
            // header('location:events.php');
        }

    }


?>