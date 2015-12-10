<?php
/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 10.12.2015
 * Time: 12:03
 */

namespace Iserter\ExpressionEvaluator;

use Illuminate\Support\Facades\Facade;


class ExpressionEngine extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return Engine::class; }
}