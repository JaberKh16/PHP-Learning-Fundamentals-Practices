<?php
    function compress_image(){
        var_dump($_FILES);
        $image_path = $_FILES['image']['tmp_name'];
        $image_info = getimagesize($_FILES['image']['tmp_name']);
        if(isset($image_info['mime'])){
            if($image_info['mime'] == "image/jpeg"){
                $image = imagecreatefromjpeg($image_path);
            }elseif($image_info['mime'] == "image/png"){
                $image = imagecreatefrompng($image_path);
            }else{
                echo "Format must be in .png or .jpeg";
            }
            // if the image is existed
            if(isset($image)){
                $compressed_img = time(). '.jpeg';
                imagejpeg($image, $compressed_img, 50); // compressed image to its 50% less ratio
                echo "Process of image done";
                // show the image
                echo "<img src='.$compressed_img.' style='width: 100px; height= 100px;'>";
            }
        }
    }

    if(isset($_POST['btnImgSubmit'])){
        compress_image();			
        var_dump($_FILES);
    }

?>