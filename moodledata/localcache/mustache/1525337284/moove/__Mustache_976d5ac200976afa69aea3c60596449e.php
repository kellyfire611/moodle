<?php

class __Mustache_976d5ac200976afa69aea3c60596449e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul class="list-group">
';
        // 'flatnavigation' section
        $value = $context->find('flatnavigation');
        $buffer .= $this->section1b83e0471f744a99fde8be25817da72c($context, $indent, $value);
        $buffer .= $indent . '</ul>
';

        return $buffer;
    }

    private function section29266fe0de498f1b02e20d713b8a342c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        </ul>
        <ul class="list-group">
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
                
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        <ul class="list-group">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE262a41669da4e6e3b97fcdc38c27010(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'font-weight-bold';
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
                
                $buffer .= 'font-weight-bold';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0a564190593b75afcd4350f2aefb861(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^is_section}}
                <li class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" data-key="{{key}}">
                    <a href="{{{action}}}">
                        <span class="text m-l-{{get_indent}}">{{{text}}}</span>
                    </a>
                </li>
        {{/is_section}}
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
                
                // 'is_section' inverted section
                $value = $context->find('is_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="list-group-item list-group-item-action ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionE262a41669da4e6e3b97fcdc38c27010($context, $indent, $value);
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    <a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">
';
                    $buffer .= $indent . '                        <span class="text m-l-';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </a>
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe9955ab2a0642065d5e708bf9e87436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/folder';
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
                
                $buffer .= 'i/folder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0278d58ea702d38f29e1c8528357c3db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}i/folder{{/pix}}
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
                
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionDe9955ab2a0642065d5e708bf9e87436($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f3a3cf2c7a836f91f4e3fe687282564(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^is_section}}
                            <li class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" data-key="{{key}}">
                                <a class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" href="{{{action}}}">
                                    <span class="text">{{{text}}}</span>
                                </a>
                            </li>
                        {{/is_section}}
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
                
                // 'is_section' inverted section
                $value = $context->find('is_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <li class="list-group-item list-group-item-action ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionE262a41669da4e6e3b97fcdc38c27010($context, $indent, $value);
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                <a class="list-group-item list-group-item-action ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionE262a41669da4e6e3b97fcdc38c27010($context, $indent, $value);
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">
';
                    $buffer .= $indent . '                                    <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                </a>
';
                    $buffer .= $indent . '                            </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b83e0471f744a99fde8be25817da72c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showdivider}}
        </ul>
        <ul class="list-group">
    {{/showdivider}}
    {{#action}}
        {{^is_section}}
                <li class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" data-key="{{key}}">
                    <a href="{{{action}}}">
                        <span class="text m-l-{{get_indent}}">{{{text}}}</span>
                    </a>
                </li>
        {{/is_section}}
    {{/action}}
    {{^action}}
            <li class="list-group-item" data-key="{{key}}">
                <a class="m-l-{{get_indent}}" href="javascript:void(0);">
                    {{#is_section}}
                        {{#pix}}i/folder{{/pix}}
                    {{/is_section}}
                    <span class="text">{{{text}}}</span>
                </a>
                <ul>
                    {{#children}}
                        {{^is_section}}
                            <li class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" data-key="{{key}}">
                                <a class="list-group-item list-group-item-action {{#isactive}}font-weight-bold{{/isactive}}" href="{{{action}}}">
                                    <span class="text">{{{text}}}</span>
                                </a>
                            </li>
                        {{/is_section}}
                    {{/children}}
                </ul>
            </li>
    {{/action}}
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
                
                // 'showdivider' section
                $value = $context->find('showdivider');
                $buffer .= $this->section29266fe0de498f1b02e20d713b8a342c($context, $indent, $value);
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionC0a564190593b75afcd4350f2aefb861($context, $indent, $value);
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-group-item" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                <a class="m-l-';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" href="javascript:void(0);">
';
                    // 'is_section' section
                    $value = $context->find('is_section');
                    $buffer .= $this->section0278d58ea702d38f29e1c8528357c3db($context, $indent, $value);
                    $buffer .= $indent . '                    <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                </a>
';
                    $buffer .= $indent . '                <ul>
';
                    // 'children' section
                    $value = $context->find('children');
                    $buffer .= $this->section9f3a3cf2c7a836f91f4e3fe687282564($context, $indent, $value);
                    $buffer .= $indent . '                </ul>
';
                    $buffer .= $indent . '            </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
