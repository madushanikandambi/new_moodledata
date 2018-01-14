<?php

class __Mustache_0ef8a8b2eac6d04ebe069d154ed52736 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="box generalbox">
';
        // 'respondentscolumn0' section
        $value = $context->find('respondentscolumn0');
        $buffer .= $this->section7372f573eef536191f018e8a96157bea($context, $indent, $value);
        // 'respondentscolumn1' section
        $value = $context->find('respondentscolumn1');
        $buffer .= $this->section960f7f0d93a797a813e8ada44c18d4a5($context, $indent, $value);
        // 'respondentscolumn2' section
        $value = $context->find('respondentscolumn2');
        $buffer .= $this->section15b1362637b3dcdc818807c7e61f320e($context, $indent, $value);
        $buffer .= $indent . '    <div style="clear: both;"></div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section5c574f3c717648e7b85902cb19e87c76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{.}}}<br />
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '<br />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7372f573eef536191f018e8a96157bea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="respondentscolumn0" class="respondentscolumn">
    {{#respondentlink}}
    {{{.}}}<br />
    {{/respondentlink}}
    </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="respondentscolumn0" class="respondentscolumn">
';
                // 'respondentlink' section
                $value = $context->find('respondentlink');
                $buffer .= $this->section5c574f3c717648e7b85902cb19e87c76($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section960f7f0d93a797a813e8ada44c18d4a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="respondentscolumn1" class="respondentscolumn">
    {{#respondentlink}}
    {{{.}}}<br />
    {{/respondentlink}}
    </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="respondentscolumn1" class="respondentscolumn">
';
                // 'respondentlink' section
                $value = $context->find('respondentlink');
                $buffer .= $this->section5c574f3c717648e7b85902cb19e87c76($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15b1362637b3dcdc818807c7e61f320e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="respondentscolumn2" class="respondentscolumn">
    {{#respondentlink}}
    {{{.}}}<br />
    {{/respondentlink}}
    </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="respondentscolumn2" class="respondentscolumn">
';
                // 'respondentlink' section
                $value = $context->find('respondentlink');
                $buffer .= $this->section5c574f3c717648e7b85902cb19e87c76($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
