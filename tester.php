<?php
require_once 'Autoloader.php';

//$checking = new CheckAccountDataService();
//$saving = new SavingAccountDataService();

//$checkbalance= $checking->getBalance();
//$savingbalance = $saving->getBalance();

//echo "Current values:<br>";
//echo "Checking balance = " . $checkbalance . "<br>";
//echo "Saving balance = " . $savingbalance . "<br>";

//echo "Take $100 from checking and put into savings<br>";
//$checking->updateBalance($checkbalance- 100);
//$saving->updateBalance($savingbalance+100);

//$checkbalance= $checking->getBalance();
//$savingbalance = $saving->getBalance();

$bs = new BankingBusinessService();

$checkbagbalance = $bs->getCheckingBalance();
$savingbalance= $bs->getSavingsBalance();

echo "Current values:<br>";
echo "Checking balance = " . $checkbalance . "<br>";
echo "Saving balance = " . $savingbalance . "<br>";

