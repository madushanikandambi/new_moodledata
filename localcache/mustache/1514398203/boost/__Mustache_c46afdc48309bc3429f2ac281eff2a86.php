<?php

class __Mustache_c46afdc48309bc3429f2ac281eff2a86 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="mod_questionnaire_qsettingspage generalbox">
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
