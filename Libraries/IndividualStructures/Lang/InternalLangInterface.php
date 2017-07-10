<?php namespace ZN\IndividualStructures;

interface InternalLangInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // shortCodes
    //--------------------------------------------------------------------------------------------------
    //
    // @param $code = 'en'
    //
    // @return Mixed
    //
    //--------------------------------------------------------------------------------------------------
    public function shortCodes(String $code = NULL);

    //--------------------------------------------------------------------------------------------------
    // currentLang()
    //--------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------
    public function current() : String;

    //--------------------------------------------------------------------------------------------------
    // select()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $file
    // @param string $str
    // @param mixed  $changed
    //
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------
    public function select(String $file = NULL, String $str = NULL, $changed = NULL);

    //--------------------------------------------------------------------------------------------------
    // setLang()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $l
    //
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------
    public function set(String $l = NULL) : Bool;

    //--------------------------------------------------------------------------------------------------
    // getLang()
    //--------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------
    public function get() : String;
}
