<?php

class __Mustache_1243dd411d1863a5d86101978a37289f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionB2de36517ad2f6ea4d915eebdf9d3c1a($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionAac0be684ce611507220a823d1de9f8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loading, mod_assign';
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
                
                $buffer .= 'loading, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2de36517ad2f6ea4d915eebdf9d3c1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'y/loading, core, {{#str}}loading, mod_assign{{/str}}';
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
                
                $buffer .= $indent . 'y/loading, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAac0be684ce611507220a823d1de9f8e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
