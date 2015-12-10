<?php
/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 10.12.2015
 * Time: 12:03
 */

namespace Iserter\ExpressionEvaluator;



class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return Engine::class; }
}