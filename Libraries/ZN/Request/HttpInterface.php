<?php namespace ZN\Request;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

interface HttpInterface
{
    //--------------------------------------------------------------------------------------------------------
    // httpFix() -> 5.1.0
    //--------------------------------------------------------------------------------------------------
    //
    // @param bool $security = false
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------
    public static function fix(Bool $security = false) : String;

    //--------------------------------------------------------------------------------------------------------
    // Host -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function host() : String;

    //--------------------------------------------------------------------------------------------------------
    // User Agent -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function userAgent() : String;

    //--------------------------------------------------------------------------------------------------------
    // Accept -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function accept() : String;

    //--------------------------------------------------------------------------------------------------------
    // Accept Language -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function language() : String;

    //--------------------------------------------------------------------------------------------------------
    // Accept Encoding -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function encoding() : String;

    //--------------------------------------------------------------------------------------------------------
    // Cookie -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function cookie() : String;

    //--------------------------------------------------------------------------------------------------------
    // Connection -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function connection() : String;

    //--------------------------------------------------------------------------------------------------------
    // Is Request Request -> 4.3.1
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function isRequestMethod(...$methods) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Is Ajax
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function isAjax() : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Is Curl
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function isCurl() : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Browser Lang
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $default tr
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function browserLang(String $default = 'en') : String;

    //--------------------------------------------------------------------------------------------------------
    // Code
    //--------------------------------------------------------------------------------------------------------
    //
    // @param numeric $code
    //
    //--------------------------------------------------------------------------------------------------------
    public static function code($code = 200) : String;

    //--------------------------------------------------------------------------------------------------------
    // Message
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $message
    //
    //--------------------------------------------------------------------------------------------------------
    public static function message(String $message) : String;

    //--------------------------------------------------------------------------------------------------------
    // Name
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public static function name(String $name) : HTTP;

    //--------------------------------------------------------------------------------------------------------
    // Value
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed $value
    //
    //--------------------------------------------------------------------------------------------------------
    public static function value($value) : HTTP;

    //--------------------------------------------------------------------------------------------------------
    // Input
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $input
    //
    //--------------------------------------------------------------------------------------------------------
    public static function input(String $input) : HTTP;

    //--------------------------------------------------------------------------------------------------------
    // Select
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public static function select(String $name = NULL);

    //--------------------------------------------------------------------------------------------------------
    // Insert
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    // @param string $value
    //
    //--------------------------------------------------------------------------------------------------------
    public static function insert(String $name = NULL, $value = NULL) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Delete
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public static function delete(String $name = NULL) : Bool;
}
