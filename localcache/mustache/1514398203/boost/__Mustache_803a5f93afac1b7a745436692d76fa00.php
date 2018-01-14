<?php

class __Mustache_803a5f93afac1b7a745436692d76fa00 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="mod_questionnaire_previewpage">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('tabsarea'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <h2>';
        $value = $this->resolveValue($context->find('heading'), $context);
        $buffer .= $value;
        $buffer .= '</h2>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('formstart'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="box generalbox">
';
        $buffer .= $indent . '        <h3 class="surveyTitle">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '</h3>';
        $value = $this->resolveValue($context->find('printblank'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'subtitle' section
        $value = $context->find('subtitle');
        $buffer .= $this->sectionF5d74b8dc1d9b802e6ee8d25df350487($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'addinfo' section
        $value = $context->find('addinfo');
        $buffer .= $this->section787ca1e2a356c7cd4ae6fbad4a1e3aab($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'message' section
        $value = $context->find('message');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'questions' section
        $value = $context->find('questions');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('formend'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        // 'closebutton' section
        $value = $context->find('closebutton');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);

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

    private function sectionF5d74b8dc1d9b802e6ee8d25df350487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 class="surveySubTitle">{{.}}</h4>';
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
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
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

}
