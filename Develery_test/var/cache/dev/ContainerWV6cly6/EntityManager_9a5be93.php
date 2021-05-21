<?php

namespace ContainerWV6cly6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9127b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac721 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1aa84 = [
        
    ];

    public function getConnection()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getConnection', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getMetadataFactory', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getExpressionBuilder', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'beginTransaction', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getCache', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'transactional', array('func' => $func), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->transactional($func);
    }

    public function commit()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'commit', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->commit();
    }

    public function rollback()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'rollback', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getClassMetadata', array('className' => $className), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'createQuery', array('dql' => $dql), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'createNamedQuery', array('name' => $name), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'createQueryBuilder', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'flush', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'clear', array('entityName' => $entityName), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->clear($entityName);
    }

    public function close()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'close', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->close();
    }

    public function persist($entity)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'persist', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'remove', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'refresh', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'detach', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'merge', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'contains', array('entity' => $entity), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getEventManager', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getConfiguration', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'isOpen', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getUnitOfWork', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getProxyFactory', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'initializeObject', array('obj' => $obj), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'getFilters', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'isFiltersStateClean', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'hasFilters', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return $this->valueHolder9127b->hasFilters();
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

        $instance->initializerac721 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9127b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9127b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9127b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, '__get', ['name' => $name], $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        if (isset(self::$publicProperties1aa84[$name])) {
            return $this->valueHolder9127b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9127b;

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

        $targetObject = $this->valueHolder9127b;
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
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9127b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9127b;
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
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, '__isset', array('name' => $name), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9127b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9127b;
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
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, '__unset', array('name' => $name), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9127b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9127b;
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
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, '__clone', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        $this->valueHolder9127b = clone $this->valueHolder9127b;
    }

    public function __sleep()
    {
        $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, '__sleep', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;

        return array('valueHolder9127b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac721 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac721;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerac721 && ($this->initializerac721->__invoke($valueHolder9127b, $this, 'initializeProxy', array(), $this->initializerac721) || 1) && $this->valueHolder9127b = $valueHolder9127b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9127b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9127b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
