/*
Write a function that is able to calculate a mortgage loan using the following:

Loans from 5,000 - 9,999 uses 2.5% Interest rate

Loans from 10,000 - 19,999 uses 3.5% Interest rate

Loans from 20,000 - 49,999, uses 4% Interest rate

Loans from 50,000 and above, uses 6% Interest rate

Formula for calculation:

Simple Interest= Principal x Rate x Time ÷ (100 x 12)

Amount Payable = Principal + simpleInterest */





 <?php

 loan = '$loan'
 simpleInterest = '$simpleInterest';
 Principal = $_POST ['$principal'];
 Time = $_POST ['$time'];
 Amount = $_POST ['$amount'];

 if ('$loan' >= 5000 && '$loan' <= 9999) {

     function loans('$principal','$time'){
         '$simpleInterest' = '$principal' * 2.5 * '$time' / (100 * 12) ;

          return '$simpleInterest';
     };

    };

     elseif('$loan' >= 10000 && "$loan" <= 19999) {

            function loans('$principal','$time'){
                '$simpleInterest' = '$principal' * 3.5 * '$time' / (100 * 12) ;

               return '$simpleInterest';

         };

        };

     elseif('$loan' >= 20000 && '$loan' <= 49999){

        function loans('$principal','$time'){
            '$simpleInterest' = '$principal' * 4 * '$time' / (100 * 12) ;

             return '$simpleInterest';


     };

    };

     else('loan' >= 50000){

        function loans('$principal','$time'){
            '$simpleInterest' = '$principal' * 6 * '$time' / (100 * 12) ;

             return '$simpleInterest';

     };

    };



 function cash('$principal', '$simpleInterest'){

      '$amount' = '$principal' + '$simpleInterest';

     return '$amount';

    };

