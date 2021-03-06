<?php

class __Mustache_430cf9b9340a7efda61a4707dfe58bc9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<a href="#previous" data-action="previous-user">';
        $value = $this->resolveValue($context->find('larrow'), $context);
        $buffer .= $value;
        $buffer .= '</a>
';
        $buffer .= $indent . '    <span data-region="input-field">
';
        $buffer .= $indent . '        <select data-action="change-user" data-assignmentid="';
        $value = $this->resolveValue($context->find('assignmentid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></select>
';
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '<a href="#next" data-action="next-user">';
        $value = $this->resolveValue($context->find('rarrow'), $context);
        $buffer .= $value;
        $buffer .= '</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span data-region="user-count">
';
        $buffer .= $indent . '    <small>
';
        $buffer .= $indent . '        <span data-region="user-count-summary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0020318c935939c95fb0d36e79b8cb7c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </small>
';
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span data-region="configure-filters" id="filter-configuration-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="card card-small">
';
        $buffer .= $indent . '    <form>
';
        $buffer .= $indent . '        <label><input type="checkbox" name="filter_submitted">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB9b8eabbe5bed58726a9fbdc5d76d591($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <label><input type="checkbox" name="filter_notsubmitted">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9853999a67b57a9c8a2db62cd855a4fb($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <label><input type="checkbox" name="filter_requiregrading">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE4c359e438d71a051ed7ce115adc08d6($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <label><input type="checkbox" name="filter_grantedextension">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7845bfa8b064de4a22d95d269b76c04b($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="#" data-region="user-filters" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBaf6094422528beb51f5cf06b766d123($context, $indent, $value);
        $buffer .= '" aria-expanded="false" aria-controls="filter-configuration-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <span class="accesshide">
';
        // 'filters' section
        $value = $context->find('filters');
        $buffer .= $this->section51c5bdfe04b6d9a48916d63c05fd8b3c($context, $indent, $value);
        // 'filters' inverted section
        $value = $context->find('filters');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section91121b875b722b6742bc4932aadc1793($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionFaec89d37ccdced2a9ac2bb07df6e146($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function section0020318c935939c95fb0d36e79b8cb7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xofy, mod_assign, { "x": "{{index}}", "y": "{{count}}" }';
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
                
                $buffer .= 'xofy, mod_assign, { "x": "';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" }';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9b8eabbe5bed58726a9fbdc5d76d591(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtersubmitted, mod_assign';
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
                
                $buffer .= 'filtersubmitted, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9853999a67b57a9c8a2db62cd855a4fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filternotsubmitted, mod_assign';
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
                
                $buffer .= 'filternotsubmitted, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4c359e438d71a051ed7ce115adc08d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filterrequiregrading, mod_assign';
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
                
                $buffer .= 'filterrequiregrading, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7845bfa8b064de4a22d95d269b76c04b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtergrantedextension, mod_assign';
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
                
                $buffer .= 'filtergrantedextension, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaf6094422528beb51f5cf06b766d123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'changefilters, mod_assign';
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
                
                $buffer .= 'changefilters, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51c5bdfe04b6d9a48916d63c05fd8b3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{filtername}}
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
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('filtername'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91121b875b722b6742bc4932aadc1793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nofilters, mod_assign';
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
                
                $buffer .= 'nofilters, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFaec89d37ccdced2a9ac2bb07df6e146(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/filter';
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
                
                $buffer .= 'i/filter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
