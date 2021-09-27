<?php

// function FunctionName() {
//     Action
// }

// const PrintWelcome = 20;
// $PrintWelcome = 10;

// function PrintWelcome($name) {
//     echo "Welcome $name";
// }
// PrintWelcome('Layla');

// function fullName($first, $last = '') {
//     echo "Welcome, $first $last";
// }
// fullName('Mohammed', 'Naji');
// echo '<br>';
// fullName('Sanaa');

// col-md-2 => kebabCase
// fullName => CamelCase
// FullName => CapitalizeCase
// full_name => snake_case

function VAT($price) {
    // echo $price * (15 / 100); // Void
    return $price * (15 / 100);
}

$vat = VAT(32333);
echo 33333 + $vat;