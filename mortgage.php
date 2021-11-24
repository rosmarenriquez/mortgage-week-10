<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mortgage.css"/>
    <title>Mortgage Calculator Results</title>
    <?php

$apr = $_GET["APR"];
$term = $_GET["TERM"];
$amount = $_GET["AMOUNT"];

function calc($apr, $term, $amount){
    $loanR = (($apr) / 100) / 12;
    $loanA = ($term) * 12;

    $mPmt = ($amount * $loanR * pow((1 + $loanR), $loanA)) / (pow((1 + $loanR), $loanA) -1);
    $payment = sprintf('%0.2f', round($mPmt, 2));
    return $payment;
}
?>
</head>

<body>
<header>
    <p>Mortgage Calculator Results Page</p>
</header>

<div class="format">
    <?php
echo '<li>Interest rate is: '. $apr . "</li>";
echo '<li>Loan term is: '. $term . "</li>";
echo '<li>Loan amount is: $'. $amount . "</li>";
echo '<li>The Monthly Payment is: $' , calc($apr, $term, $amount) . "</li>";
?>
</div>

</body>
</html>