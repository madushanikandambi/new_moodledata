<?php

class __Mustache_d9c024e41d004e677df7a9783f362312 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<header role="banner" class="pos-f-t navbar navbar-full navbar-light bg-faded navbar-static-top moodle-has-zindex">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <span class="navbar-brand ';
        // 'output.should_display_navbar_logo' section
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        $buffer .= '
';
        // 'output.should_display_navbar_logo' inverted section
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '                hidden-sm-down
';
        }
        $buffer .= $indent . '                ">
';
        $buffer .= $indent . '
';
        // 'output.should_display_navbar_logo' section
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->sectionCd652c7d309a010181b60dcf8b3fb701($context, $indent, $value);
        $buffer .= $indent . '            <span class="site-name hidden-sm-down">';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <div class="pull-xs-right nav-link">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.secure_login_info'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd652c7d309a010181b60dcf8b3fb701(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="logo hidden-xs-down">
                    <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                </span>
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
                
                $buffer .= $indent . '                <span class="logo hidden-xs-down">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
