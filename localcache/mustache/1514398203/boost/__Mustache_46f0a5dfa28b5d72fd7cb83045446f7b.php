<?php

class __Mustache_46f0a5dfa28b5d72fd7cb83045446f7b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="mod_questionnaire_nonrespondentspage generalbox">
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
