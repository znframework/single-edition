<?php namespace ZN\IndividualStructures;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

interface CompressInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Extract
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $source
    // @param  string $target
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function extract(String $source, String $target = NULL, String $password = NULL) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Write
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $file
    // @param string $data
    // @param string $mode
    //
    //--------------------------------------------------------------------------------------------------------
    public function write(String $file, String $data) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Read
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $file
    // @param numeric $length
    // @param string  $type
    //
    //--------------------------------------------------------------------------------------------------------
    public function read(String $file) : String;

    //--------------------------------------------------------------------------------------------------------
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    // @param numeric $blockSize
    // @param mixed   $workFactor
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(String $data) : String;

    //--------------------------------------------------------------------------------------------------------
    // Undo
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    // @param numeric $small
    //
    //--------------------------------------------------------------------------------------------------------
    public function undo(String $data) : String;
}
