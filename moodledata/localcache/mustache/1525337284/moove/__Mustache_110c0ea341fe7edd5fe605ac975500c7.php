<?php

class __Mustache_110c0ea341fe7edd5fe605ac975500c7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="top-footer" class="container-fluid">
';
        $buffer .= $indent . '    <div class="row-fluid">
';
        $buffer .= $indent . '        <div class="col-md-7 contact">
';
        $buffer .= $indent . '            <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3d46676fa71043dd556eac6777c89162($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <h4>';
        $value = $this->resolveValue($context->find('getintouchcontent'), $context);
        $buffer .= $value;
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <ul>
';
        $buffer .= $indent . '                ';
        // 'website' section
        $value = $context->find('website');
        $buffer .= $this->sectionDa84523a6de83bb3da333467396d8a76($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        // 'mobile' section
        $value = $context->find('mobile');
        $buffer .= $this->section11240a730541af9a91e57a546575d278($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        // 'mail' section
        $value = $context->find('mail');
        $buffer .= $this->section4f7b967f4dbfcd47a62a9107ac90bbd9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-5 social">
';
        $buffer .= $indent . '          <ul>
';
        // 'facebook' section
        $value = $context->find('facebook');
        $buffer .= $this->section5ad39d1003b84ca065eca835fec620e7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'twitter' section
        $value = $context->find('twitter');
        $buffer .= $this->section4926152f76966017195265f59ca583ad($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'googleplus' section
        $value = $context->find('googleplus');
        $buffer .= $this->sectionF317e26ef91a5fc0ae11401bb54e9c7f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'linkedin' section
        $value = $context->find('linkedin');
        $buffer .= $this->section87949ab61aecb919280489643fa99206($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'youtube' section
        $value = $context->find('youtube');
        $buffer .= $this->section3d6e553bd2a971f5601aded6e6dead57($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'instagram' section
        $value = $context->find('instagram');
        $buffer .= $this->sectionC2f7a14ddb1c227d2f7fef029fe42e6e($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'disablebottomfooter' inverted section
        $value = $context->find('disablebottomfooter');
        if (empty($value)) {
            
            $buffer .= $indent . '  <footer id="page-footer" class="p-y-1">
';
            $buffer .= $indent . '      <div class="container-fluid">
';
            $buffer .= $indent . '          <div id="course-footer">';
            $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
            $buffer .= $indent . '
';
            // 'output.page_doc_link' section
            $value = $context->findDot('output.page_doc_link');
            $buffer .= $this->section895635d83ec22a8a8db1b62ec80133bf($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madewithmoodle">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section35f635c8ba97bc48efcfa9ed9dd99cf3($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '              <a href="https://moodle.org"><img src="';
            $value = $this->resolveValue($context->findDot('output.get_pix_image_url_base'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '/moodle-logo-white.png" alt="Moodle logo"></a>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madeby">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section56e3b38ca8d3097861df300611a406de($context, $indent, $value);
            $buffer .= ' <i class="text-danger fa fa-heart"></i> ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section7a1b67c3b84451cafdd6fc65fb7ab03a($context, $indent, $value);
            $buffer .= ' <a href="http://conecti.me">conecti.me</a></p>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <nav class="nav navbar-nav hidden-lg-up">
';
            // 'output.custom_menu_flat' section
            $value = $context->findDot('output.custom_menu_flat');
            $buffer .= $this->sectionFd415ea874893e69c52c84326b5c8b66($context, $indent, $value);
            $buffer .= $indent . '          </nav>
';
            $buffer .= $indent . '          ';
            $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '  </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section3d46676fa71043dd556eac6777c89162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stayintouch, theme_moove';
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
                
                $buffer .= 'stayintouch, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa84523a6de83bb3da333467396d8a76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li><i class="icon-globe"></i>{{{website}}}</li>';
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
                
                $buffer .= '<li><i class="icon-globe"></i>';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11240a730541af9a91e57a546575d278(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li><i class="icon-phone"></i>{{{mobile}}}</li>';
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
                
                $buffer .= '<li><i class="icon-phone"></i>';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f7b967f4dbfcd47a62a9107ac90bbd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<li><i class="icon-envelope"></i>{{{mail}}}</li>';
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
                
                $buffer .= '<li><i class="icon-envelope"></i>';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ad39d1003b84ca065eca835fec620e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{facebook}}}" target="_blank" class="facebook" />
                    <i class="icon-social-facebook"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="facebook" />
';
                $buffer .= $indent . '                    <i class="icon-social-facebook"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4926152f76966017195265f59ca583ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{twitter}}}" target="_blank" class="twitter" />
                    <i class="icon-social-twitter"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="twitter" />
';
                $buffer .= $indent . '                    <i class="icon-social-twitter"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF317e26ef91a5fc0ae11401bb54e9c7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{googleplus}}}" target="_blank" class="googleplus" />
                    <i class="icon-social-gplus"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('googleplus'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="googleplus" />
';
                $buffer .= $indent . '                    <i class="icon-social-gplus"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87949ab61aecb919280489643fa99206(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{linkedin}}}" target="_blank" class="linkedin" />
                    <i class="icon-social-linkedin"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="linkedin" />
';
                $buffer .= $indent . '                    <i class="icon-social-linkedin"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d6e553bd2a971f5601aded6e6dead57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{youtube}}}" target="_blank" class="youtube" />
                    <i class="icon-social-youtube"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="youtube" />
';
                $buffer .= $indent . '                    <i class="icon-social-youtube"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2f7a14ddb1c227d2f7fef029fe42e6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{instagram}}}" target="_blank" class="instagram" />
                    <i class="icon-social-instagram"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="instagram" />
';
                $buffer .= $indent . '                    <i class="icon-social-instagram"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section895635d83ec22a8a8db1b62ec80133bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <p class="helplink">{{{ output.page_doc_link }}}</p>
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
                
                $buffer .= $indent . '              <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f635c8ba97bc48efcfa9ed9dd99cf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madewitmoodle, theme_moove';
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
                
                $buffer .= 'madewitmoodle, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56e3b38ca8d3097861df300611a406de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madeby, theme_moove';
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
                
                $buffer .= 'madeby, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a1b67c3b84451cafdd6fc65fb7ab03a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'by, theme_moove';
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
                
                $buffer .= 'by, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd415ea874893e69c52c84326b5c8b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <ul class="list-unstyled p-t-1">
                      {{> theme_moove/custom_menu_footer }}
                  </ul>
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
                
                $buffer .= $indent . '                  <ul class="list-unstyled p-t-1">
';
                if ($partial = $this->mustache->loadPartial('theme_moove/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                      ');
                }
                $buffer .= $indent . '                  </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
