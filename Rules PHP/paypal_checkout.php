
<?php

if([order:order-status] == 'Completed'){
    //set credit amount
    $credits = ([list-item:weight] * [list-item:qty];

     //add credits to users bank
     $result = addCartBankLedger([order:uid], $credits);
} else{
    //payment not successful, force status to failed
    $result = false;
}

//display stuff for the user
    if($result){
        $msg = $credits . ' credits have been added to your Account. View transaction details at ' . l('My GFC Bank Account','/my-account/bank-ledger') . '. A confirmation email has also been sent to your email address on file.';
        drupal_set_message($msg);
    }
    else{
        $msg = 'There was a problem completing your transaction. Order status is: ' . [order:order-status] . ' If you used a credit card it may have been declined. Please try another card and retry payment.';
        drupal_set_message($msg);
    }

