<?php

class __Mustache_f317457e1c70ecb5fd6b17eb366e60f4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="box respondentsnavbar">
';
        $buffer .= $indent . '    ';
        // 'previous' section
        $value = $context->find('previous');
        $buffer .= $this->section19915aeb85c72c06226b2767a25ad02e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'prevrespnumbers' section
        $value = $context->find('prevrespnumbers');
        $buffer .= $this->sectionBdbdf6006dad56a19e632c77cd922dc3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'currrespnumber' section
        $value = $context->find('currrespnumber');
        $buffer .= $this->sectionC681e9d29ffd589e5710e5a6e3c93722($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'nextrespnumbers' section
        $value = $context->find('nextrespnumbers');
        $buffer .= $this->section3f3f28dadaaaff0ae6571625eb3396c6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'next' section
        $value = $context->find('next');
        $buffer .= $this->section35308eb03e68da791943044e6a982c44($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section0ce7519556f02e689e63b4e03a15d9cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous, moodle';
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
                
                $buffer .= 'previous, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19915aeb85c72c06226b2767a25ad02e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{url}}" title="{{title}}">{{# str }}previous, moodle{{/ str }}</a> | ';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0ce7519556f02e689e63b4e03a15d9cc($context, $indent, $value);
                $buffer .= '</a> | ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdbdf6006dad56a19e632c77cd922dc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{url}}" title="{{title}}">{{respnumber}}</a> | ';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('respnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a> | ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC681e9d29ffd589e5710e5a6e3c93722(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<b>{{.}}</b>';
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
                
                $buffer .= '<b>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f3f28dadaaaff0ae6571625eb3396c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' | <a href="{{url}}" title="{{title}}">{{respnumber}}</a>';
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
                
                $buffer .= ' | <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('respnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section559177a877044e1a1d916f561b7653e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next, moodle';
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
                
                $buffer .= 'next, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35308eb03e68da791943044e6a982c44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' | <a href="{{url}}" title="{{title}}">{{# str}}next, moodle{{/ str }}</a>';
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
                
                $buffer .= ' | <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section559177a877044e1a1d916f561b7653e3($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
