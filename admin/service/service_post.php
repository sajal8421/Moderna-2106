<?php
session_start();

if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $box_color = trim(htmlentities($_POST['box_color']));
    $icon_class = trim(htmlentities($_POST['icon_class']));

    if(empty($title)){
        $_SESSION['titleerr'] = "Enter Your Title";
    }

    if(!empty($title)){
       
        require_once "../db.php";

        $query = "INSERT INTO services(title, designation, box_color, icon_class) VALUES ('$title','$description','$box_color','$icon_class')";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success'] = "Servcies Uploads Success!";
            header("Location: index.php");
        }
    }else{
        header("Loaction: insert.php");
    }
}