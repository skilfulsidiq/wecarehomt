<?php
class StringGenerator{

    public static function generateNumber($length) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public static function generateMembershipNumber() {

        return mt_rand(100000,999999). substr(time(),6,5);
    }

    public static function generateTranxNumber($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'.time();
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function generateRandomCode(){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        return substr(str_shuffle($permitted_chars), 0, 28);
    }
    public static function generateUUID($data = null)
    {
        $data = $data ?? random_bytes(16);
        return $data;
    }
}
