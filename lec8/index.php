<?php

var_dump($_POST);

if( isset($_POST['send']) ) {
    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $gender = '';
    if(isset($_POST['gender'])) {
        $gender = htmlspecialchars($_POST['gender']);
        // $gender = $_POST['gender'];
        // echo $gender;
    }
    if($name != '' && $email != '' && $gender != '') {
        echo "Welcome to my website";
    }else {
        echo "<p style='color:red'>All Fields required</p>";
    }
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" placeholder="Name" name="name"> <br>
    <input type="email" placeholder="Email" name="email"> <br>
    <input type="radio" value="Male" name="gender"> Male 
    <input type="radio" value="Female" name="gender"> Female <br>
    <button name="send">Send</button>
</form>