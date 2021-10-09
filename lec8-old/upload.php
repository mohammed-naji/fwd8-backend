<?php 
    var_dump($_FILES);
    move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button>Upload</button>
</form>