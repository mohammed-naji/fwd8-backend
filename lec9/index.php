<?php 
// echo "<pre>";
//     var_dump($_FILES);
// echo "</pre>";

// echo rand();


if(isset($_POST['upload'])) { // big love to this function

    // $image = $_FILES['image'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // echo $image['tmp_name'];
    //echo $image_tmp;

    // create new named to the image to prevent redundancy

    // moh.aaaa_52.wer.jpg

    $path = explode('.', $image_name);
    // $i = count($path) - 1;
    // $ex = $path[$i];
    $ex = end($path);
    $new_img_name = 'fwd8_'.time().'_'.rand().'.'.$ex;

    $aloowed = ['png', 'jpg', 'jpeg', 'gif', 'ico', 'heic'];
    if(in_array($ex, $aloowed)) {
        move_uploaded_file($image_tmp, 'uploads/' .$new_img_name);
    }else {
        echo "The file not allowed";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <!-- <input type="file" name="image2"> -->
    <button name="upload">Upload</button>
</form>