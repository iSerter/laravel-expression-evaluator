<?php

namespace Iserter\ExpressionEvaluator;

use Iserter\ExpressionEvaluator\Operators\Arithmetic\Addition;
use Iserter\ExpressionEvaluator\Operators\Arithmetic\Division;
use Iserter\ExpressionEvaluator\Operators\Arithmetic\Modulus;
use Iserter\ExpressionEvaluator\Operators\Arithmetic\Multiplication;
use Iserter\ExpressionEvaluator\Operators\Arithmetic\Subtraction;
use Iserter\ExpressionEvaluator\Operators\Comparison\Equal;
use Iserter\ExpressionEvaluator\Operators\Comparison\GreaterThan;
use Iserter\ExpressionEvaluator\Operators\Comparison\LessThan;
use Iserter\ExpressionEvaluator\Operators\Comparison\NotEqual;
use Iserter\ExpressionEvaluator\Operators\Logical\AndOperator;
use Iserter\ExpressionEvaluator\Operators\Logical\OrOperator;


abstract class Expression {

    protected $value = '';

    public function __construct($value) {
        $this->value = $value;
    }

    /**
     * @param $value
     * @return Number|Equal|GreaterThan|LessThan|OrOperator|Parenthesis
     * @throws \Exception
     */
    public static function factory($value) {

        if ($value instanceof Expression) {
            return $value;
        }

        if (is_numeric($value)) {
            return new Number($value);
        }

        if (in_array($value, array('(', ')'))) {
            return new Parenthesis($value);
        }

        switch($value) {
            case Addition::SYMBOL:
                return new Addition($value);
            case Subtraction::SYMBOL:
                return new Subtraction($value);
            case Multiplication::SYMBOL:
                return new Multiplication($value);
            case Division::SYMBOL:
                return new Division($value);
            case Modulus::SYMBOL:
                return new Modulus($value);
            case AndOperator::SYMBOL:
                return new AndOperator($value);
            case OrOperator::SYMBOL:
                return new OrOperator($value);
            case GreaterThan::SYMBOL:
                return new GreaterThan($value);
            case LessThan::SYMBOL:
                return new LessThan($value);
            case Equal::SYMBOL:
                return new Equal($value);
            case NotEqual::SYMBOL:
                return new NotEqual($value);
            default:
                throw new \InvalidArgumentException('Undefined Value ' . $value);
        }

    }

    abstract public function operate(\SplStack $stack);

    public function isOperator() {
        return false;
    }

    public function isParenthesis() {
        return false;
    }

    public function isNoOp() {
        return false;
    }

    public function render() {
        return $this->value;
    }
}