<?php namespace ZN\Abilities;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

trait SingletonAbility
{
    /**
     * singleton
     * 
     * @var self
     * 
     * @return self
     */
    protected static $singleton = NULL;
    
    /**
     * singleton
     * 
     * @param void
     * 
     * @return self
     */
    protected static function singleton()
    {
        if( ! self::$singleton instanceof self ) 
        {
            self::$singleton = new self;
        }

        return self::$singleton;
    }
}

class_alias('ZN\Abilities\SingletonAbility', 'SingletonAbility');