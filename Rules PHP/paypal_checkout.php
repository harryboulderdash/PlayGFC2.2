//captures completed credit purchase and adds to user's bank ledger
//provides message to user

//set credit amount
$credits = [list-item:weight] * [list-item:qty];

//add credits to users bank
$result = addCartBankLedger([order:uid], $credits);

//drupal_set_message('This is a message and qty: ' . [list-item:qty] . ' weight: ' . [list-item:weight] . ' uid: ' . [order:uid]);

//display stuff for the user
if($result){
$msg = $credits . ' credits have been added to your Account. View transaction details at ' . l('My GFC Bank Account','/my-account/bank-ledger') . '. A confirmation email has also been sent to your email address on file.';
drupal_set_message($msg);
}
else{
$msg = 'Problem completing your transaction. Please contact support.';
drupal_set_message($msg);
}