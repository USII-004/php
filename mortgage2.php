<!-- 
Write a function that is able to calculate a mortgage loan using the following:

Loans from 5,000 - 9,999 uses 2.5% Interest rate

Loans from 10,000 - 19,999 uses 3.5% Interest rate

Loans from 20,000 - 49,999, uses 4% Interest rate

Loans from 50,000 and above, uses 6% Interest rate

Formula for calculation:

Simple Interest= Principal x Rate x Time ÷ (100 x 12)

Amount Payable = Principal + simpleInterest 
 -->

 <?php

$principal= $_POST['principal'];
$duration= $_POST['duration'];

// this is how you call a variable that will get values from the user. we use use the post because our form method is post also the name we used in the array above must correspond to our form input name, in our case name and duration respectively. 

public function rate($amount) {
    if ($amount >= 5000 && $amount <= 9999) {
        return 2.5;
    } elseif ($amount >= 10000 && $amount <= 19999) {
        return 3.5;
    } elseif ($amount >= 20000 && $amount <= 49999) {
        return 4;
    } elseif ($amount >= 50000) {
        return 6;
    } else {
        return 0;
    }
}

$interestRate= rate($principal);

// I created a differernt function to assign a rate this way my code is way smaller. notice that i used the rate function in thevariable inteerestRate  

public function simpleInterest($principal, $interestRate, $duration) {
    return ($principal * $interestRate * $duration) / (100 * 12);
}

// A different function to calculate the simple interest

$mortgageLoan = simpleInterest($principal, $interestRate, $duration);

// The variable mortgageLoan now calculate the simple Interest using the values gotten from the user.

$amountPayable = $principal + $mortgageLoan;

// The variable a mount payable gives the total amount the usere is expected to pay 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Mortgage Loan Calculator</title>
</head>
<body>
<!-- since we will be getting values from the user we will use a form for that. the form action will be that it should be processed on the same page, and we use the post method so the values will not be visible in the url      -->
    <form action="mortgage2.php" method="post">
        <div>
            <label for="principal">Please Enter Principal Amount :</label> <br>
            <input type="number" id="principal" name="principal">
        </div>
<!-- notice that i use the same name for my Id, Name and label i.e Principal. this is to link the label and input together. -->
        <div>
            <label for="duration">Please Enter duration in years :</label> <br>
            <input type="number" id="duration" name="duration">
        </div>

        <div>
            <button type="submit" name="submit">Calculate</button>
        </div>
    </form>

    <?php
    echo "You took a principal loan of #$principal<br>\n";
    echo "This loan will last for a duration of $duration year(s)<br>\n";
    echo "The interest rate for this principal loan and duration is %$interestRate<br>\n";
    echo "The simple interest on this principal amount is #$mortgageLoan<br>\n";
    echo "You are required to pay #$amountPayable on repayment of your loan.<br>\n";
    ?>
</body>
</html>