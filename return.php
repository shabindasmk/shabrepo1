<?php
$txnId=$_REQUEST['txn'];
if($txnId=='')
{
    echo "Payment Failed";
}
else
{
    echo "Direct Payment Completed Successfully.Your Transaction Id is ".$txnId;
}
?>
