<?php
// $gender = 'female';
// if($gender == 'male') {
//     echo "<p style='background: blue'>Gender Male</p>";
// }

// if ($gender == 'female') {
//     echo "<p style='background: pink'>Gender Female</p>";
// }
?>

<?php 
    $gender = 'female';
    $class = 'a';
    if($gender == 'female') {
        $class = 'b';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a {
            background: blue;
            color: #fff;
        }
        .b {
            background: pink;
            color: #547;
        }
    </style>
</head>
<body class="<?php echo $class ?>">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, eaque? Harum illo molestias cumque praesentium error reprehenderit aperiam incidunt alias quia aliquid? Dicta illum consequuntur placeat nam, ducimus aperiam ullam.</p>
</body>
</html>