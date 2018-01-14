<?php

class __Mustache_94da1a2d13fb73ef87a3452f006ea8b8 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        if ($partial = $this->mustache->loadPartial('mod_assign/loading')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
