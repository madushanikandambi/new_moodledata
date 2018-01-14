<?php

class __Mustache_3983d9b8e27c69c7efd55b288f88e036 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section45027158e209100ea97797c9dbbead43($context, $indent, $value);
        $buffer .= ' ';
        if ($partial = $this->mustache->loadPartial('mod_assign/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</h3>
';

        return $buffer;
    }

    private function section45027158e209100ea97797c9dbbead43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savingchanges, mod_assign';
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
                
                $buffer .= 'savingchanges, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
