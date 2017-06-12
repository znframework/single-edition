<?php namespace ZN\ViewObjects\Javascript\Components;

interface AceEditorInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Generate
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string   $id   = 'editor'
    // @param callable $editors
    //
    //--------------------------------------------------------------------------------------------------------
    public function generate(String $id = 'editor', Callable $editors) : String;
}
