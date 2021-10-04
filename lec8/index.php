<?php
// var_dump($_SERVER);
// var_dump($_POST);

if(isset($_POST['send'])) {
    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    $gender = '';
    if(isset($_POST['gender'])) {
        $gender = htmlspecialchars($_POST['gender']);
    }
    // $gender = $_POST['gender'];

    // echo $gender;
    // exit;

    // echo "You enter " . $_POST['name'] . ' Name and ' . $_POST['email'] . ' Email';

    // if( isset($_POST['gender']) && $_POST['gender'] != '') {
    //     echo "You enter $name Name and $email Email";
    // }

    if($name == '' || $email == '' || $gender == '') {
        echo "<span style='color:red'>All Fields is required</span>";
    }else {
        echo "You enter $name Name and $email Email";
    }

    
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" placeholder="Name" name="name"><br>
    <input type="email" placeholder="Email" name="email" /><br>
    <input type="radio" value="Male" name="gender"> Male 
    <input type="radio" value="Female" name="gender"> Female 
    <button name="send">Send</button>
</form>