<?php
include("functions/init.php");
if (isset($_POST['write']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    
        //basic constants
        $title      = $_POST['title'];
        $details    = escape($_POST['det']);    


        //upload article picture
        $target_dir = "artfile/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            echo validation_errors("Sorry, only JPG & JPEG files are allowed.");
            $uploadOk = 0;
        } else {
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo validation_errors("Sorry, your file was not uploaded.");
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                
    //constants
    $date       = date("Y-m-d h:i:sa");
    $author     = $_SESSION['Username'];
    $authormail = $_SESSION['user'];
    $post_url   = str_replace(' ', '-', $title);


    //check if title exist
    $ssl = "SELECT * FROM article WHERE `post_url` = '$post_url'";
    $rsl = query($ssl);
    if (row_count($rsl) == 1) {


    //asign a new post_url 
      $post_url = str_replace(' ', '-', $title).rand(0, 99);

    } else {
 
    $post_url   = str_replace(' ', '-', $title); 
    }


    //insert details into db
    $sql = "INSERT INTO article(`sn`, `details`, `title`, `author`, `author_mail`, `view`, `datepost`, `post_url`, `pix`)";
    $sql.= "VALUES('1', '$details', '$title', '$author', '$authormail', '0', '$date', '$post_url', '$target_file')";
    $res = query($sql);


    $_SESSION['msg'] = "  Your article was uploaded successfully. You can edit and delete the article whenever you wish to.  ";


    redirect("./myarticles");

} else {
    echo validation_errors("Sorry, there was an error uploading your file.");
}

        echo $details;

}
        }
    }
?>