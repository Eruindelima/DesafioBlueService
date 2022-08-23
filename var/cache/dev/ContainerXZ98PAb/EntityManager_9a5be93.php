<?php

namespace ContainerXZ98PAb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc007d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1b140 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties91eaa = [
        
    ];

    public function getConnection()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getConnection', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getMetadataFactory', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getExpressionBuilder', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'beginTransaction', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getCache', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'transactional', array('func' => $func), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'commit', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->commit();
    }

    public function rollback()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'rollback', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getClassMetadata', array('className' => $className), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'createQuery', array('dql' => $dql), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'createNamedQuery', array('name' => $name), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'createQueryBuilder', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'flush', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'clear', array('entityName' => $entityName), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->clear($entityName);
    }

    public function close()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'close', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->close();
    }

    public function persist($entity)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'persist', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'remove', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'refresh', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'detach', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'merge', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'contains', array('entity' => $entity), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getEventManager', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getConfiguration', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'isOpen', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getUnitOfWork', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getProxyFactory', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'initializeObject', array('obj' => $obj), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'getFilters', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'isFiltersStateClean', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'hasFilters', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return $this->valueHolderc007d->hasFilters();
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

        $instance->initializer1b140 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc007d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc007d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc007d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, '__get', ['name' => $name], $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        if (isset(self::$publicProperties91eaa[$name])) {
            return $this->valueHolderc007d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc007d;

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

        $targetObject = $this->valueHolderc007d;
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
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc007d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc007d;
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
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, '__isset', array('name' => $name), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc007d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc007d;
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
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, '__unset', array('name' => $name), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc007d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc007d;
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
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, '__clone', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        $this->valueHolderc007d = clone $this->valueHolderc007d;
    }

    public function __sleep()
    {
        $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, '__sleep', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;

        return array('valueHolderc007d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1b140 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1b140;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1b140 && ($this->initializer1b140->__invoke($valueHolderc007d, $this, 'initializeProxy', array(), $this->initializer1b140) || 1) && $this->valueHolderc007d = $valueHolderc007d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc007d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc007d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
