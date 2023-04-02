<?php



if (!function_exists('generateWalletId')) {
    function generateWalletId($name, $nuban = null)
    {
        $length = 10;
        $ref =  StringGenerator::generateTranxNumber(15);
        if ($nuban) {
            $ref = $ref . $nuban;
            return $ref;
        }
        $chars = $name . $ref;
        return substr(str_shuffle($chars), 0, 20);
    }
}

if (!function_exists('generateVendorWalletId')) {
    function generateVendorWalletId($name, $phone)
    {
        $length = 10;
        $ref =  StringGenerator::generateTranxNumber(15);

        $chars = $name . $ref.$phone;
        return substr(str_shuffle($chars), 0, 20);
    }
}
