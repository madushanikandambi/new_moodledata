<?php

class __Mustache_f48913b80ca2cabb33b619e69b054de0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<!-- Begin HTML generated from response_text template. -->
';
        $buffer .= $indent . '<div class="questionnaire_response questionnaire_text">
';
        $buffer .= $indent . '    <span class="selected">';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- End HTML generated from response_text template. -->';

        return $buffer;
    }
}
