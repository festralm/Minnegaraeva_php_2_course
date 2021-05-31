<?php

namespace ContainerUsCW8rD;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'phpDocumentor'.\DIRECTORY_SEPARATOR.'Descriptor'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'Filter.php';
class Filter_6ae6af3 extends \phpDocumentor\Descriptor\Filter\Filter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf9932 = null;
    private $initializer147cb = null;
    private static $publicProperties1db8d = [
        
    ];
    public function filter(\phpDocumentor\Descriptor\Filter\Filterable $descriptor) : ?\phpDocumentor\Descriptor\Filter\Filterable
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, 'filter', array('descriptor' => $descriptor), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        return $this->valueHolderf9932->filter($descriptor);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\phpDocumentor\Descriptor\Filter\Filter $instance) {
            unset($instance->pipeline);
        }, $instance, 'phpDocumentor\\Descriptor\\Filter\\Filter')->__invoke($instance);
        $instance->initializer147cb = $initializer;
        return $instance;
    }
    public function __construct(iterable $filters)
    {
        static $reflection;
        if (! $this->valueHolderf9932) {
            $reflection = $reflection ?? new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
            $this->valueHolderf9932 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\phpDocumentor\Descriptor\Filter\Filter $instance) {
            unset($instance->pipeline);
        }, $this, 'phpDocumentor\\Descriptor\\Filter\\Filter')->__invoke($this);
        }
        $this->valueHolderf9932->__construct($filters);
    }
    public function & __get($name)
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, '__get', ['name' => $name], $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        if (isset(self::$publicProperties1db8d[$name])) {
            return $this->valueHolderf9932->$name;
        }
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9932;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf9932;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9932;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf9932;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, '__isset', array('name' => $name), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9932;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf9932;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, '__unset', array('name' => $name), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        $realInstanceReflection = new \ReflectionClass('phpDocumentor\\Descriptor\\Filter\\Filter');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9932;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf9932;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, '__clone', array(), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        $this->valueHolderf9932 = clone $this->valueHolderf9932;
    }
    public function __sleep()
    {
        $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, '__sleep', array(), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
        return array('valueHolderf9932');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\phpDocumentor\Descriptor\Filter\Filter $instance) {
            unset($instance->pipeline);
        }, $this, 'phpDocumentor\\Descriptor\\Filter\\Filter')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer147cb = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer147cb;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer147cb && ($this->initializer147cb->__invoke($valueHolderf9932, $this, 'initializeProxy', array(), $this->initializer147cb) || 1) && $this->valueHolderf9932 = $valueHolderf9932;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9932;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9932;
    }
}

if (!\class_exists('Filter_6ae6af3', false)) {
    \class_alias(__NAMESPACE__.'\\Filter_6ae6af3', 'Filter_6ae6af3', false);
}
