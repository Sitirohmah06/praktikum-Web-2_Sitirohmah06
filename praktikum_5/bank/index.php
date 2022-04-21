<?php
require_once 'class_Account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$Ahmad = new AccountBank('1010', 'Ahmad', 500000);
$ijah = new AccountBank('1011', 'ijah', 0);
$budi = new AccountBank('1012', 'budi', 0);

$Ahmad->deposit(1000000);
$Ahmad->cetak();

$Ahmad->doTransfer($ijah, 1000000);
$Ahmad->cetak();

$Ahmad->doTransfer($budi, 500000);
$Ahmad->cetak();

$ijah->cetak();
$budi->cetak();