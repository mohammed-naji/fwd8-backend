<?php 

// مكان غير امن للتعامل مع المدخلات من الفورم
if(isset($_POST['register'])) {
// مكان امن للتعامل بسبب عملية الفحص على وجود البيانات
    $name   = htmlspecialchars($_POST['name']);
    $dob    = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $city   = htmlspecialchars($_POST['city']);

    echo "$name | $dob | $gender | $city";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms => Input</title>
</head>
<body>

<form action="" method="post">
    <div>
        <label>Name</label><br>
        <input type="text" placeholder="Name" name="name">
    </div>

    <div>
        <label>Date of Birth</label><br>
        <input type="date" name="dob">
    </div>

    <div>
        <label>Gender</label><br>
        <label><input type="radio" name="gender" value="Male"> Male</label> <br>
        <label><input type="radio" name="gender" value="Female"> Female</label> <br>
    </div>

    <div>
        <label>City</label><br>
        <select name="city">
            <option selected disabled>Select City</option>
            <option value="28">Gaza</option>
            <option value="21">Rafah</option>
            <option value="24">Maghazi</option>
        </select>
    </div>

    <button name="register">Register</button>

</form>
    
</body>
</html>