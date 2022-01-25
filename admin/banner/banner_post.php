<?php
session_start();

if(isset($_POST['submit'])){
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_url = trim(htmlentities($_POST['btn_url']));
    $photo = $_FILES['photo'];

    if(empty($title)){
        $_SESSION['titleerr'] = "Enter Your Title";
    }

    if(!empty($title) && !empty($photo['name'])){

        require_once "../db.php";

        $img_ex = explode('.',$photo['name']);
        $img_name = $title .".". end($img_ex);

       $upload =  move_uploaded_file($photo['tmp_name'], "../../uploads/banners/".$img_name);

       if($upload){
        $query = "INSERT INTO banners(title, description, btn_text, btn_link, photo) VALUES ('$title','$description','$btn_text','$btn_url','$img_name')";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success'] = "Banner Uploads Success!";
            header("Location: banner.php");
        }

       }


    }else{
        header("Location: insert.php");
    }
}