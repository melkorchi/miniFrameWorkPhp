<?php

class PassService{

    // BLOWFISH
    private static $hash = '$2a';

    private static $cost = '$10$';

    public static function uSalt(): string{
        return substr(sha1(mt_rand()), 0, 22);
    }

    public static function hashPass(string $pass): string{
        return crypt($pass, self::$hash . self::$cost . self::uSalt() );
    }

    public static function checkPass(string $hash, string $pass): bool{
        $salt = substr($hash, 0, 29);
        $newPass = crypt($pass, $salt);
        return ($hash == $newPass)? true:false;
    }