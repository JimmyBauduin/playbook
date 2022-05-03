<?php

namespace ContainerRV64b33;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdff21 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81edf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties510e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getConnection', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getMetadataFactory', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getExpressionBuilder', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'beginTransaction', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getCache', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'transactional', array('func' => $func), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'commit', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->commit();
    }

    public function rollback()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'rollback', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getClassMetadata', array('className' => $className), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'createQuery', array('dql' => $dql), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'createNamedQuery', array('name' => $name), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'createQueryBuilder', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'flush', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'clear', array('entityName' => $entityName), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->clear($entityName);
    }

    public function close()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'close', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->close();
    }

    public function persist($entity)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'persist', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'remove', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'refresh', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'detach', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'merge', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'contains', array('entity' => $entity), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getEventManager', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getConfiguration', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'isOpen', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getUnitOfWork', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getProxyFactory', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'initializeObject', array('obj' => $obj), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'getFilters', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'isFiltersStateClean', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'hasFilters', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return $this->valueHolderdff21->hasFilters();
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

        $instance->initializer81edf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdff21) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdff21 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdff21->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, '__get', ['name' => $name], $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        if (isset(self::$publicProperties510e1[$name])) {
            return $this->valueHolderdff21->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdff21;

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

        $targetObject = $this->valueHolderdff21;
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
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdff21;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdff21;
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
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, '__isset', array('name' => $name), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdff21;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdff21;
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
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, '__unset', array('name' => $name), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdff21;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdff21;
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
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, '__clone', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        $this->valueHolderdff21 = clone $this->valueHolderdff21;
    }

    public function __sleep()
    {
        $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, '__sleep', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;

        return array('valueHolderdff21');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81edf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81edf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81edf && ($this->initializer81edf->__invoke($valueHolderdff21, $this, 'initializeProxy', array(), $this->initializer81edf) || 1) && $this->valueHolderdff21 = $valueHolderdff21;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdff21;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdff21;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
