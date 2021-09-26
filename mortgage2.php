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

$simpleInterest= $POST['Simpleinterest'];
$principal= $_POST['principal'];
$time= $_POST['time'];

switch($simpleInterest){

    case "($principal >= 5000 && $principal <= 9999)";
    
    function loan1($principal, $time){

        return $simpleInterest = $principal * 2.5 * $time / (100 * 12) ;

    };

     echo loan1($principal, $time);

     break;


     case "($principal>=10000 && $principal<=19999)";
    
    function loan2($principal, $time){

        return $simpleInterest = $principal * 3.5 * $time / (100 * 12) ;

    };

     echo loan2($principal, $time);

     break;

     case "($principal>=20000 && $principal<=49999)";
    
    function loan3($principal, $time){

        return $simpleInterest = $principal * 4 * $time / (100 * 12) ;

    };

     echo loan3($principal, $time);

     break;

     case "($principal>=50000)";
    
    function loan4($principal, $time){

        return $simpleInterest = $principal * 6 * $time / (100 * 12) ;

    };

     echo loan4($principal, $time);

     break;


   };