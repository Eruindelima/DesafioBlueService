<?php

namespace Container712x1q2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7bc0b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49eee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f088 = [
        
    ];

    public function getConnection()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getConnection', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getMetadataFactory', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getExpressionBuilder', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'beginTransaction', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getCache', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'transactional', array('func' => $func), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'commit', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->commit();
    }

    public function rollback()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'rollback', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getClassMetadata', array('className' => $className), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'createQuery', array('dql' => $dql), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'createNamedQuery', array('name' => $name), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'createQueryBuilder', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'flush', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'clear', array('entityName' => $entityName), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->clear($entityName);
    }

    public function close()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'close', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->close();
    }

    public function persist($entity)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'persist', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'remove', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'refresh', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'detach', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'merge', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'contains', array('entity' => $entity), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getEventManager', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getConfiguration', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'isOpen', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getUnitOfWork', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getProxyFactory', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'initializeObject', array('obj' => $obj), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'getFilters', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'isFiltersStateClean', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'hasFilters', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return $this->valueHolder7bc0b->hasFilters();
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

        $instance->initializer49eee = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7bc0b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7bc0b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7bc0b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, '__get', ['name' => $name], $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        if (isset(self::$publicProperties6f088[$name])) {
            return $this->valueHolder7bc0b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bc0b;

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

        $targetObject = $this->valueHolder7bc0b;
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
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bc0b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7bc0b;
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
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, '__isset', array('name' => $name), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bc0b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7bc0b;
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
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, '__unset', array('name' => $name), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bc0b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7bc0b;
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
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, '__clone', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        $this->valueHolder7bc0b = clone $this->valueHolder7bc0b;
    }

    public function __sleep()
    {
        $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, '__sleep', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;

        return array('valueHolder7bc0b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer49eee = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer49eee;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49eee && ($this->initializer49eee->__invoke($valueHolder7bc0b, $this, 'initializeProxy', array(), $this->initializer49eee) || 1) && $this->valueHolder7bc0b = $valueHolder7bc0b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7bc0b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7bc0b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
