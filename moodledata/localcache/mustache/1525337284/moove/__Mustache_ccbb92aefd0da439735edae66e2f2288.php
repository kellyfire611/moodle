<?php

class __Mustache_ccbb92aefd0da439735edae66e2f2288 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/popover_region')) {
            $context->pushBlockContext(array(
                'classes' => array($this, 'blockE737f467bd785c3f6072027241ca452e'),
                'attributes' => array($this, 'block08ade9825ca5a9524ce984d694df99ac'),
                'togglelabel' => array($this, 'blockCd8224ae20ab8906e9ea6865fbad2e2c'),
                'togglecontent' => array($this, 'blockFc67b0a0ed36eb9ecfbf13188307dd5f'),
                'containerlabel' => array($this, 'blockB7898d00e912bcbfd70bfe4b76efe7bb'),
                'headertext' => array($this, 'blockFc3d1eedd170c675ed9af5c6124029f4'),
                'headeractions' => array($this, 'blockF3259fbda940b8af61c0bd8d5c703320'),
                'content' => array($this, 'blockA59e1e956ca5aa7d04d5b6d007f1d8f2'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionF4d24ad100ba0e6c825e57e57239c21a($context, $indent, $value);

        return $buffer;
    }

    private function section75a2d2a58de39eaa0eab52024156c94b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showmessagewindownonew, message ';
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
                
                $buffer .= ' showmessagewindownonew, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB69af701c3da068c4b63a9d598702913(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglemessagemenu, message ';
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
                
                $buffer .= ' togglemessagemenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb70af33b8011de7432c8334305b6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationwindow, message ';
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
                
                $buffer .= $indent . ' notificationwindow, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29c757f7e4b4143731d7f32ce8d916eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messages, message ';
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
                
                $buffer .= ' messages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAae28451a64929fa29d065a6ae6c6f49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' newmessage, message ';
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
                
                $buffer .= ' newmessage, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD52891bef9837f9da27028964220b7a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markallread ';
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
                
                $buffer .= ' markallread ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0f74ddaef5ca561ea840045e2d91329(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messagepreferences, message ';
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
                
                $buffer .= ' messagepreferences, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section955d68f55e8eb436a9fa5ea3d268a3ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nomessages, message ';
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
                
                $buffer .= ' nomessages, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4d24ad100ba0e6c825e57e57239c21a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'message_popup/message_popover_controller\'], function($, controller) {
    var container = $(\'#nav-message-popover-container\');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'message_popup/message_popover_controller\'], function($, controller) {
';
                $buffer .= $indent . '    var container = $(\'#nav-message-popover-container\');
';
                $buffer .= $indent . '    var controller = new controller(container);
';
                $buffer .= $indent . '    controller.registerEventListeners();
';
                $buffer .= $indent . '    controller.registerListNavigationEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE737f467bd785c3f6072027241ca452e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'popover-region-messages';
    
        return $buffer;
    }

    public function block08ade9825ca5a9524ce984d694df99ac($context)
    {
        $indent = $buffer = '';
        $buffer .= 'id="nav-message-popover-container" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function blockCd8224ae20ab8906e9ea6865fbad2e2c($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section75a2d2a58de39eaa0eab52024156c94b($context, $indent, $value);
    
        return $buffer;
    }

    public function blockFc67b0a0ed36eb9ecfbf13188307dd5f($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <i class="icon-envelope" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB69af701c3da068c4b63a9d598702913($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '        <div class="count-container hidden" data-region="count-container"></div>
';
    
        return $buffer;
    }

    public function blockB7898d00e912bcbfd70bfe4b76efe7bb($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEb70af33b8011de7432c8334305b6a62($context, $indent, $value);
    
        return $buffer;
    }

    public function blockFc3d1eedd170c675ed9af5c6124029f4($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section29c757f7e4b4143731d7f32ce8d916eb($context, $indent, $value);
    
        return $buffer;
    }

    public function block4808ac2ba550c03351d76870d370c1f0($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <a class="mark-all-read-button"
';
        $buffer .= $indent . '                    href="#"
';
        $buffer .= $indent . '                    role="button"
';
        $buffer .= $indent . '                    title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    data-action="mark-all-read">
';
        $buffer .= $indent . '                    <span class="normal-icon"><i class="icon-check" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
        $buffer .= '"></i></span>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </a>
';
    
        return $buffer;
    }

    public function block0a16baa447e7e35f75783591646fef8b($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
    
        return $buffer;
    }

    public function block3757c64940263b10bb70b8bb3dac2a20($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <a href="';
        $value = $this->resolveValue($context->findDot('urls.preferences'), $context);
        $buffer .= $value;
        $buffer .= '"
';
        $buffer .= $indent . '                    title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD0f74ddaef5ca561ea840045e2d91329($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <i class="icon-settings" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD0f74ddaef5ca561ea840045e2d91329($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                </a>
';
    
        return $buffer;
    }

    public function block6eec86ad54b4ed84b04e169a0ee8c05d($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD0f74ddaef5ca561ea840045e2d91329($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF3259fbda940b8af61c0bd8d5c703320($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="newmessage-link">
';
        $blockFunction = $context->findInBlock('anchor');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '                <a href="';
            $value = $this->resolveValue($context->findDot('urls.writeamessage'), $context);
            $buffer .= $value;
            $buffer .= '">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionAae28451a64929fa29d065a6ae6c6f49($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </a>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
            $context->pushBlockContext(array(
                'anchor' => array($this, 'block4808ac2ba550c03351d76870d370c1f0'),
                'tooltip' => array($this, 'block0a16baa447e7e35f75783591646fef8b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
            $context->pushBlockContext(array(
                'anchor' => array($this, 'block3757c64940263b10bb70b8bb3dac2a20'),
                'tooltip' => array($this, 'block6eec86ad54b4ed84b04e169a0ee8c05d'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
    
        return $buffer;
    }

    public function blockA59e1e956ca5aa7d04d5b6d007f1d8f2($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
';
        $buffer .= $indent . '        <div class="empty-message" data-region="empty-message" tabindex="0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section955d68f55e8eb436a9fa5ea3d268a3ab($context, $indent, $value);
        $buffer .= '</div>
';
    
        return $buffer;
    }
}
