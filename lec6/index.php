<?php
echo '<br>';
date_default_timezone_set('Asia/Gaza'); 
function calc_date($dob) {
// function calc_date($y, $m, $d) {
    // echo "Your age in years is " . (2022 - $dob);

    $date = explode('-', $dob);
    $d = $date[0]; // day from string
    $m = $date[1];
    $y = $date[2];

    $year = date('Y') - $y;
    $month = date('m') - $m;
    $day = date('d') - $d;

    if($month < 0) {
        $year--;
        $month += 12;
    }

    if($day < 0) {
        $month--;
        $day += 30;
    }

    echo "Your age is $year years $month month $day days";
}
// calc_date("27-7-2002");
// calc_date(2002, 12, 12);

// echo date("d-m-Y h:i:s A");
function calculate_final_price($price, $weight, $tax_price = 10, $vat_price = 15,$discount_price = 5) {
    $tax = $tax_price * $weight;
    $price = $price - 
    $vat = ($price * $vat_price) / 100;
    $discount = ($price * $discount_price) / 100;
    $final_price = ($price - $discount) + $tax + $vat;
    return $final_price;
}

$price = calculate_final_price(30, .5);
echo $price; 
echo "<br>";
echo round($price, 1);
// (30  - 1.5) + 2 + 4.2