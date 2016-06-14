<?php
/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 08.12.2015
 * Time: 13:42
 */

namespace Iserter\ExpressionEvaluator;

use Math\Parser;

class Engine {

    protected $math;

    public function __construct()
    {
        $this->math = new Parser();
    }

    public function evaluate($string) {
        return $this->math->evaluate($string);
    }

}