<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 14/02/16
 * Time: 04:47
 */

namespace Iserter\ExpressionEvaluator\Operators\Comparison;

use Iserter\ExpressionEvaluator\Operators\OperatorBase;

class NotEqual extends OperatorBase {

    const SYMBOL = '!=';

    protected $precedence = 3;

    public function operate(\SplStack $stack) {
        $left = $stack->pop()->operate($stack);
        $right = $stack->pop()->operate($stack);
        return (int) ($left != $right);
    }
}