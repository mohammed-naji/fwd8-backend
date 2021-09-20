<?php 
// $name = 'Ahmed Mohammed';
// $age = 20;
?>
<!-- <div style="width:200px; background: #584762; padding: 20px;color: #fff"
>
<?php //echo "$name $age"; ?>
</div> -->


<?php 

// $sum = 5 + 9;
// echo $sum;
/*
If Condition
if (Condition) {
    Block of Statments
}

if(Condition) {
    Block 1 => Condition True
}else {
    Block 2 => Condition False
}

if(Condition) {

}else if (Another Condition) {

}else {

}

*/

$age = 20;
// if($age > 17 || $age == 17) {
if($age >= 17) {
    echo "your age ($age) allowed to enter the university";
}else {
    echo "روح العب واستمتع في حياتك ي حبيبي";
}

echo "<hr>";

$age = 119;
if($age < 17) {
    echo "انت الان في مرحلة الطفولة";
}else if ($age >= 17 && $age < 50) {
    echo "انت الان في مرحلة الشباب";
}else {
    echo "انت الان في مرحلة الشيخوخة";
}
echo "<hr>";

$num1 = 5;
$num2 = 3;
$op = "22";

switch ($op) {
    case "+" : 
        echo $num1 + $num2;
        break;
    case "-" : 
        echo $num1 - $num2;
        break;
    case "*" :
        echo $num1 * $num2;
        break;
    case "/" :
        echo $num1 / $num2;
        break;
    default : 
        echo "($op) invalid operation";
} 



?>