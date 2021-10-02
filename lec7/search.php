<?php 

$keyword = '';

if(isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}

// var_dump(strlen($keyword));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>
<body>
    <?php if(strlen($keyword) != 0) { ?>
    <h1>You Searched About <span style="color: red;"><?php echo $keyword ?></span></h1>
    <?php } ?>

    <?php 
    if(strlen($keyword) != 0) {
        echo "<h1>You Searched About <span style='color: red;'>$keyword</span></h1>";
    }
    ?>
</body>
</html>