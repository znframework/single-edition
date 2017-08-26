<?php namespace ZN\ViewObjects;

use CallController;

class InternalSheet extends CallController implements InternalSheetInterface
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
    // Style Sheet Trait
    //--------------------------------------------------------------------------------------------------------
    //
    // methods
    //
    //--------------------------------------------------------------------------------------------------------
    use SheetTrait;

    //--------------------------------------------------------------------------------------------------------
    // Animation
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function animation(Bool $tag = false) : Sheet\Helpers\Animation
    {
        return uselib($this->_namespace('Animation'), [$tag]);
    }

    //--------------------------------------------------------------------------------------------------------
    // Manipulation
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function manipulation() : Sheet\Helpers\Manipulation
    {
        return uselib($this->_namespace('Manipulation'));
    }

    //--------------------------------------------------------------------------------------------------------
    // Shadow
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function shadow(Bool $tag = false) : Sheet\Helpers\Shadow
    {
        return uselib($this->_namespace('Shadow'), [$tag]);
    }

    //--------------------------------------------------------------------------------------------------------
    // Transform
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function transform(Bool $tag = false) : Sheet\Helpers\Transform
    {
        return uselib($this->_namespace('Transform'), [$tag]);
    }

    //--------------------------------------------------------------------------------------------------------
    // Transition
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function transition(Bool $tag = false) : Sheet\Helpers\Transition
    {
        return uselib($this->_namespace('Transition'), [$tag]);
    }

    //--------------------------------------------------------------------------------------------------------
    // Protected Namespace
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string class
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    protected function _namespace($class)
    {
        return 'ZN\ViewObjects\Sheet\Helpers\\'.$class;
    }
}
