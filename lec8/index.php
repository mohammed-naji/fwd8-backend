<?php
// var_dump($_SERVER);

// var_dump($_POST);

if(isset($_POST['send'])) {
    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    $gender = '';
    if( isset($_POST['gender']) && $_POST['gender'] != '') {
        $gender = htmlspecialchars($_POST['gender']);
    }

    if($name != '' && $email != '' && $gender != '') {
    // if($name == '' || $email == '' || $gender == '') {
        echo "$name $email";
    }else {
        echo "<span style='color:red'>All fields is required</span>";
    }

    // if($name == '') {
    // // if( empty($name) ) {

    // }
    
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="radio" value="Male" name="gender"> Male 
    <input type="radio" value="Female" name="gender"> Female <br>
    <button name="send">Send</button>
</form>