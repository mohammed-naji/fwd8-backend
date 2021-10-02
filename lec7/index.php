<?php 
// var_dump($_GET);-
// var_dump($_POST);
// echo $_POST['user'];
// if(isset($_POST['user'])) {
//     echo "Your usersname is : " . $_POST['user'];
// }
// if(isset($_POST['pass'])) {
// echo "<br>";
// echo "Your password is : " . $_POST['pass'];
// }

if(isset($_POST['login'])) {
    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);

    echo "Your usersname is : $user";
    echo "<br>";
    echo "Your password is : $pass";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP => Forms</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Username" name="user"><br>
        <input type="password" placeholder="Password" name="pass"><br>
        <button name="login">Login</button>
    </form>

    <hr>

    <form action="search.php" method="get">
        <input type="text" placeholder="Keyword" name="keyword">
        <button>Search</button>
    </form>
</body>
</html>