<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 26/02/16
 * Time: 16:44
 */

namespace Iserter\ExpressionEvaluator\Operators\Comparison;

use Iserter\ExpressionEvaluator\Operators\OperatorBase;

class LessOrEqual extends OperatorBase {
    const SYMBOL = '<=';

    protected $precedence = 2;
    protected $leftAssoc = true;

    public function operate(\SplStack $stack) {
        $right = $stack->pop()->operate($stack);
        $left = $stack->pop()->operate($stack);
        return (int) ($left <= $right);
    }
}