<?php namespace ZN\IndividualStructures\Import;

class Handload implements HandloadInterface
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
    // handload()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param variadic $args
    //
    //--------------------------------------------------------------------------------------------------------
    public function use(...$args)
    {
        if( ! empty($args) ) foreach( $args as $file )
        {
            $suffix     = suffix($file, '.php');
            $file       = HANDLOAD_DIR.$suffix;

            if( is_file($file) )
            {
                import($file); // Local File
            }
        }
    }
}
