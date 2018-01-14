<?php

class __Mustache_f43444d0545c20be990663ed5fd324bd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<!-- Begin HTML generated from question_text template. -->
';
        // 'qelements' section
        $value = $context->find('qelements');
        $buffer .= $this->section5363eae2d99ece32d8f029a1f3823e96($context, $indent, $value);
        $buffer .= $indent . '<!-- End HTML generated from question_text template. -->';

        return $buffer;
    }

    private function sectionFf67004d335f6a1dc1df034b6116f58e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'onkeypress="{{.}}"';
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
                
                $buffer .= 'onkeypress="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b784ccecb8313adbf48bea21661c1e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'maxlength="{{choice.maxlength}}"';
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
                
                $buffer .= 'maxlength="';
                $value = $this->resolveValue($context->findDot('choice.maxlength'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1025d309395acfa973ab6cd5277e9d06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<input {{#choice.onkeypress}}onkeypress="{{.}}"{{/choice.onkeypress}} type="text" size="{{choice.size}}" name="{{choice.name}}" {{#choice.maxlength}}maxlength="{{choice.maxlength}}"{{/choice.maxlength}} value="{{choice.value}}" id="{{choice.id}}" />
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
                
                $buffer .= $indent . '<input ';
                // 'choice.onkeypress' section
                $value = $context->findDot('choice.onkeypress');
                $buffer .= $this->sectionFf67004d335f6a1dc1df034b6116f58e($context, $indent, $value);
                $buffer .= ' type="text" size="';
                $value = $this->resolveValue($context->findDot('choice.size'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="';
                $value = $this->resolveValue($context->findDot('choice.name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'choice.maxlength' section
                $value = $context->findDot('choice.maxlength');
                $buffer .= $this->section6b784ccecb8313adbf48bea21661c1e1($context, $indent, $value);
                $buffer .= ' value="';
                $value = $this->resolveValue($context->findDot('choice.value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->findDot('choice.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5363eae2d99ece32d8f029a1f3823e96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#choice}}
<input {{#choice.onkeypress}}onkeypress="{{.}}"{{/choice.onkeypress}} type="text" size="{{choice.size}}" name="{{choice.name}}" {{#choice.maxlength}}maxlength="{{choice.maxlength}}"{{/choice.maxlength}} value="{{choice.value}}" id="{{choice.id}}" />
{{/choice}}
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
                
                // 'choice' section
                $value = $context->find('choice');
                $buffer .= $this->section1025d309395acfa973ab6cd5277e9d06($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
