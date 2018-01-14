<?php

class __Mustache_87a836adc9f75e320573f9a60eac4c3a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<!-- Begin fieldset generated from response_container template. -->
';
        $buffer .= $indent . '<div class="box individualresp">
';
        $buffer .= $indent . '<fieldset id="';
        $value = $this->resolveValue($context->findDot('fieldset.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="';
        $value = $this->resolveValue($context->findDot('fieldset.class'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'qnum' section
        $value = $context->find('qnum');
        $buffer .= $this->section7576e5f49308a4c552455b44f55605d0($context, $indent, $value);
        $buffer .= $indent . '    <div class="qn-content">
';
        $buffer .= $indent . '        <div class="qn-question ';
        $value = $this->resolveValue($context->find('skippedclass'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'label' section
        $value = $context->find('label');
        $buffer .= $this->section694bd4f1d3a6876039702d4732a4b7d1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('qcontent'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'label' section
        $value = $context->find('label');
        $buffer .= $this->section7176c62f429baff7984d549eeb3ab436($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="qn-answer">
';
        // 'responses' section
        $value = $context->find('responses');
        $buffer .= $this->sectionBe64bec78d3191a3752cb20eb88cd7e4($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</fieldset>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- End fieldset generated from response_container template. -->';

        return $buffer;
    }

    private function section7ed986e9c0472d6642258caa64b90904(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'questionnum, mod_questionnaire';
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
                
                $buffer .= 'questionnum, mod_questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7576e5f49308a4c552455b44f55605d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <legend class="accesshide">{{# str }}questionnum, mod_questionnaire{{/ str}}{{{qnum}}}</legend>
    <div class="qn-legend">
        <div class="qn-info">
            <h2 class="qn-number">{{{.}}}</h2>
        </div>
        {{{required}}}
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
                
                $buffer .= $indent . '    <legend class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7ed986e9c0472d6642258caa64b90904($context, $indent, $value);
                $value = $this->resolveValue($context->find('qnum'), $context);
                $buffer .= $value;
                $buffer .= '</legend>
';
                $buffer .= $indent . '    <div class="qn-legend">
';
                $buffer .= $indent . '        <div class="qn-info">
';
                $buffer .= $indent . '            <h2 class="qn-number">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('required'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section694bd4f1d3a6876039702d4732a4b7d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<label for="{{label.for}}">';
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
                
                $buffer .= '<label for="';
                $value = $this->resolveValue($context->findDot('label.for'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7176c62f429baff7984d549eeb3ab436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</label>';
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
                
                $buffer .= '</label>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section313674c5f7adcbde8256b6a1c539e797(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="respdate">{{respdate}}</div>';
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
                
                $buffer .= '<div class="respdate">';
                $value = $this->resolveValue($context->find('respdate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe64bec78d3191a3752cb20eb88cd7e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#respdate}}<div class="respdate">{{respdate}}</div>{{/respdate}}
            <fieldset id="{{fieldset.id}}" class="{{fieldset.class}}">
                <legend class="accesshide">{{# str }}questionnum, mod_questionnaire{{/ str}}</legend>
                <div class="qn-legend">
                    <div class="qn-info">
                        <div class="accesshide">{{# str }}questionnum, mod_questionnaire{{/ str}}</div>
                    </div>
                    {{{required}}}
                </div>
                <div class="qn-content">
                    <div class="qn-question {{skippedclass}}">
                        {{#label}}<label for="{{label.for}}">{{/label}}
                        {{{qcontent}}}
                        {{#label}}</label>{{/label}}
                    </div>
                    <div class="qn-answer">
                    {{{qformelement}}}
                    </div>
                </div>
            </fieldset>
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
                // 'respdate' section
                $value = $context->find('respdate');
                $buffer .= $this->section313674c5f7adcbde8256b6a1c539e797($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <fieldset id="';
                $value = $this->resolveValue($context->findDot('fieldset.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->findDot('fieldset.class'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <legend class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7ed986e9c0472d6642258caa64b90904($context, $indent, $value);
                $buffer .= '</legend>
';
                $buffer .= $indent . '                <div class="qn-legend">
';
                $buffer .= $indent . '                    <div class="qn-info">
';
                $buffer .= $indent . '                        <div class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7ed986e9c0472d6642258caa64b90904($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('required'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="qn-content">
';
                $buffer .= $indent . '                    <div class="qn-question ';
                $value = $this->resolveValue($context->find('skippedclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                // 'label' section
                $value = $context->find('label');
                $buffer .= $this->section694bd4f1d3a6876039702d4732a4b7d1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('qcontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                // 'label' section
                $value = $context->find('label');
                $buffer .= $this->section7176c62f429baff7984d549eeb3ab436($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="qn-answer">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('qformelement'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </fieldset>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
