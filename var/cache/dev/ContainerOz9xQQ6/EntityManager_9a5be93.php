<?php

namespace ContainerOz9xQQ6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder246ad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f570 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties009fc = [
        
    ];

    public function getConnection()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getConnection', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getMetadataFactory', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getExpressionBuilder', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'beginTransaction', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getCache', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'transactional', array('func' => $func), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'commit', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->commit();
    }

    public function rollback()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'rollback', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getClassMetadata', array('className' => $className), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'createQuery', array('dql' => $dql), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'createNamedQuery', array('name' => $name), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'createQueryBuilder', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'flush', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'clear', array('entityName' => $entityName), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->clear($entityName);
    }

    public function close()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'close', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->close();
    }

    public function persist($entity)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'persist', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'remove', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'refresh', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'detach', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'merge', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'contains', array('entity' => $entity), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getEventManager', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getConfiguration', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'isOpen', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getUnitOfWork', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getProxyFactory', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'initializeObject', array('obj' => $obj), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'getFilters', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'isFiltersStateClean', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'hasFilters', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return $this->valueHolder246ad->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer6f570 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder246ad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder246ad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder246ad->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, '__get', ['name' => $name], $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        if (isset(self::$publicProperties009fc[$name])) {
            return $this->valueHolder246ad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder246ad;

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

        $targetObject = $this->valueHolder246ad;
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
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder246ad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder246ad;
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
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, '__isset', array('name' => $name), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder246ad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder246ad;
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
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, '__unset', array('name' => $name), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder246ad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder246ad;
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
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, '__clone', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        $this->valueHolder246ad = clone $this->valueHolder246ad;
    }

    public function __sleep()
    {
        $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, '__sleep', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;

        return array('valueHolder246ad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6f570 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6f570;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6f570 && ($this->initializer6f570->__invoke($valueHolder246ad, $this, 'initializeProxy', array(), $this->initializer6f570) || 1) && $this->valueHolder246ad = $valueHolder246ad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder246ad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder246ad;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
