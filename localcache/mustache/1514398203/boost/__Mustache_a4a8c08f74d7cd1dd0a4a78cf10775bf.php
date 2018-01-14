<?php

class __Mustache_a4a8c08f74d7cd1dd0a4a78cf10775bf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="mod_questionnaire_reportpage generalbox">
';
        $buffer .= $indent . '    ';
        // 'tabsarea' section
        $value = $context->find('tabsarea');
        $buffer .= $this->section171e2f5456b2bbfa199ca366add903da($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->section26ab7e0ed23b69c1208bca32fa811c1b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="box generalbox">
';
        $buffer .= $indent . '        ';
        // 'myheaders' section
        $value = $context->find('myheaders');
        $buffer .= $this->section02f8ec37809caae9eb5286b2467b7257($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'navigationbar' section
        $value = $context->find('navigationbar');
        $buffer .= $this->sectionB4683c1e87f0505861c01210112a513a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('respondentinfo'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->section7932d253b1642e66af0c4b8758e1eff0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'subtitle' section
        $value = $context->find('subtitle');
        $buffer .= $this->section40bbec6b7f0d0dbef57f01d3d043fb30($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'addinfo' section
        $value = $context->find('addinfo');
        $buffer .= $this->section787ca1e2a356c7cd4ae6fbad4a1e3aab($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'feedbackcharts' section
        $value = $context->find('feedbackcharts');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'feedbackscores' section
        $value = $context->find('feedbackscores');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        // 'feedbackmessages' section
        $value = $context->find('feedbackmessages');
        $buffer .= $this->section9930aca19eb6376c3c60a08b3e9079f5($context, $indent, $value);
        $buffer .= $indent . '        ';
        // 'feedbacknotes' section
        $value = $context->find('feedbacknotes');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'responses' section
        $value = $context->find('responses');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'bottomnavigationbar' section
        $value = $context->find('bottomnavigationbar');
        $buffer .= $this->sectionB4683c1e87f0505861c01210112a513a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section171e2f5456b2bbfa199ca366add903da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{tabsarea}}}';
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
                
                $value = $this->resolveValue($context->find('tabsarea'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26ab7e0ed23b69c1208bca32fa811c1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{notifications}}}';
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
                
                $value = $this->resolveValue($context->find('notifications'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02f8ec37809caae9eb5286b2467b7257(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2>{{{.}}}</h2>';
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
                
                $buffer .= '<h2>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4683c1e87f0505861c01210112a513a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="box respondentsnavbar">{{{.}}}</div>';
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
                
                $buffer .= '<div class="box respondentsnavbar">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7932d253b1642e66af0c4b8758e1eff0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="surveyTitle">{{{.}}}</h3>{{{printblank}}}';
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
                
                $buffer .= '<h3 class="surveyTitle">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $value = $this->resolveValue($context->find('printblank'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40bbec6b7f0d0dbef57f01d3d043fb30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="surveySubTitle">{{{.}}}</h4>';
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
                
                $buffer .= '<h4 class="surveySubTitle">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section787ca1e2a356c7cd4ae6fbad4a1e3aab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="addInfo">{{{.}}}</div>';
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
                
                $buffer .= '<div class="addInfo">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31e7f11a9c38cf6aa9e32e5913ead079(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feedbackreport, mod_questionnaire ';
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
                
                $buffer .= ' feedbackreport, mod_questionnaire ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9930aca19eb6376c3c60a08b3e9079f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3>{{# str }} feedbackreport, mod_questionnaire {{/ str }}</h3>
        {{{.}}}
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
                
                $buffer .= $indent . '        <h3>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31e7f11a9c38cf6aa9e32e5913ead079($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
