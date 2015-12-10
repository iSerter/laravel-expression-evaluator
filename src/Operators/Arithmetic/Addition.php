<?php
/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 08.12.2015
 * Time: 12:58
 */

namespace Iserter\ExpressionEvaluator\Operators\Arithmetic;


use Iserter\ExpressionEvaluator\Operators\OperatorBase;

class Addition extends OperatorBase {
    const SYMBOL = '+';

    protected $precedence = 4;

    public function operate(\SplStack $stack) {
        return $stack->pop()->operate($stack) + $stack->pop()->operate($stack);
    }

}