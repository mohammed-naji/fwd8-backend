<?php
echo '<br>';
/*
$marks = [80, 90, 60, 75, 88, 96];

// echo "Your mark in Math = " . $marks[2];

$sum = $marks[0] + $marks[1] + $marks[2] + $marks[3] + $marks[4] + $marks[5];

// echo $sum;
$avg = round($sum / 6, 2);

echo "The avg is " . $avg;
*/

/*
Loops
1. For
2. While
3. Do .. While
4. Foreach **
*/

/* 
For 
for(init value ; condition ; counter) {
    action
}
*/

// for($a = 2 ; $a <= 11 ; $a++) {
//     echo ($a - 1 ) . "<br>";
// }

/*
While
init value
while (condition) {
    action

    counter
}
*/

// $m = 0;
// while($m <= 9) {
//     echo ($m + 1) . '<br>';

//     $m++;
// }

/*

init value
do {
    action 

    counter
}while(condition);

*/

// $h = 1;
// do {
//     echo "$h<br>";

//     $h++;
// }while($h <= 10);


// $marks = [80, 90, 60, 75, 88];
// $sum = 0;
// $count = count($marks);
// for($i = 0 ; $i < $count ; $i++) {
//     $sum = $sum + $marks[$i];
// }
// $i = 0;
// while($i < $count) {
//     $sum = $sum + $marks[$i];
//     $i++;
// }
// $i = 0;
// do {
//     $sum = $sum + $marks[$i];
//     $i++;
// }while($i < $count);
// $avg = round($sum / $count, 2);
// echo "The avg is " . $avg;


/*

Foreach 
foreach(Array as var) {
    Action
}
*/

// $marks = [80, 90, 60, 75, 88];
// $sum = 0;
// foreach($marks as $mark) {
//     $sum += $mark;
// }
// $avg = round($sum / count($marks), 2);
// echo "The avg is " . $avg;

$ages = [
    'Mohammed Naji' => 27,
    'Roze' => 19,
    'Lina' => 20,
    'Ahmed' => 19,
    'Mahmoud' => 20
];
// // foreach($ages as $age) { // value
// foreach($ages as $name => $age) { // key => value
//     echo "$name age is $age <br>";
// }

$foods = [
    'الوجبات' => ['شاورما', 'كباب', 'منسف'],
    'ساندويتشات' => ['مسحب', 'فاهيتا'],
    'حلويات' => ['تشيز كيك', 'بفاريا'],
    'مشروبات' => ['جوافة']
];


foreach($foods as $category => $food) {
    // var_dump($category, $food);

    echo "$category";

    echo '<ul>';
        foreach($food as $meal) {
            echo "<li>$meal</li>";
            // echo '<li>' . $meal . '</li>';
        }
    echo '</ul>';

    echo '<hr>';
}
