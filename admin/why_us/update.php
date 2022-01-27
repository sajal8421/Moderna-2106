<?php 
session_start();

if(isset($_POST['submit'])){
    $icon_one = trim(htmlentities($_POST['icon_one']));
    $title_one = trim(htmlentities($_POST['title_one']));
    $description_one = trim(htmlentities($_POST['description_one']));
    $icon_two = trim(htmlentities($_POST['icon_two']));
    $title_two = trim(htmlentities($_POST['title_two']));
    $description_two = trim(htmlentities($_POST['description_two']));
    $video_url = trim(htmlentities($_POST['video_url']));
    $banner = $_FILES['banner'];

    if(!empty($banner['name'])){

        $banner_ex = explode('.', $banner['name']);

        $banner_name = "why-us".'.'. end($banner_ex);

       $upload = move_uploaded_file($banner['tmp_name'], '../../uploads/whyus/'.$banner_name);

       if($upload){
            $query = "UPDATE why_us SET banner='$banner_name', video_url='$video_url',icon_one='$icon_one',title_one='$title_one',description_one='$description_one',icon_two='$icon_two',title_two='$title_two',description_two='$description_two'";

            require_once '../db.php';
        
            $result = mysqli_query($conn, $query);
        
            if($result){
                $_SESSION['success'] = "Update Success!";
                header("Location: index.php");
            }
       }

    }

    
}