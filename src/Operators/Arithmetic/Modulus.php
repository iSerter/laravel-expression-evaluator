<?php
/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 13.01.2016
 * Time: 20:00
 */

namespace Iserter\ExpressionEvaluator\Operators\Arithmetic;

use Iserter\ExpressionEvaluator\Operators\OperatorBase;

class Modulus extends OperatorBase
{
    const SYMBOL = '%';
    protected $precedence = 5;
    public function operate(\SplStack $stack)
    {
        $left = $stack->pop()->operate($stack);
        $right = $stack->pop()->operate($stack);
        return $right % $left;
    }
}