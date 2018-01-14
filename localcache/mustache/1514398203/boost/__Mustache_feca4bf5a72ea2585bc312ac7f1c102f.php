<?php

class __Mustache_feca4bf5a72ea2585bc312ac7f1c102f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="mod_questionnaire_questionspage generalbox">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('tabsarea'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('formarea'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
