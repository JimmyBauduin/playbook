<?php

namespace ContainerXAxO1gH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf662b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1e197 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties66166 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getConnection', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getMetadataFactory', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getExpressionBuilder', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'beginTransaction', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getCache', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'transactional', array('func' => $func), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'commit', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->commit();
    }

    public function rollback()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'rollback', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getClassMetadata', array('className' => $className), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'createQuery', array('dql' => $dql), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'createNamedQuery', array('name' => $name), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'createQueryBuilder', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'flush', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'clear', array('entityName' => $entityName), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->clear($entityName);
    }

    public function close()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'close', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->close();
    }

    public function persist($entity)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'persist', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'remove', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'refresh', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'detach', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'merge', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'contains', array('entity' => $entity), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getEventManager', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getConfiguration', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'isOpen', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getUnitOfWork', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getProxyFactory', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'initializeObject', array('obj' => $obj), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'getFilters', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'isFiltersStateClean', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'hasFilters', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return $this->valueHolderf662b->hasFilters();
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

        $instance->initializer1e197 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf662b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf662b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf662b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, '__get', ['name' => $name], $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        if (isset(self::$publicProperties66166[$name])) {
            return $this->valueHolderf662b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf662b;

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

        $targetObject = $this->valueHolderf662b;
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
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf662b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf662b;
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
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, '__isset', array('name' => $name), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf662b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf662b;
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
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, '__unset', array('name' => $name), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf662b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf662b;
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
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, '__clone', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        $this->valueHolderf662b = clone $this->valueHolderf662b;
    }

    public function __sleep()
    {
        $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, '__sleep', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;

        return array('valueHolderf662b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1e197 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1e197;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1e197 && ($this->initializer1e197->__invoke($valueHolderf662b, $this, 'initializeProxy', array(), $this->initializer1e197) || 1) && $this->valueHolderf662b = $valueHolderf662b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf662b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf662b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
