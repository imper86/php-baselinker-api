<?php


namespace Imper86\PhpBaselinkerApi;


use Http\Client\Common\Plugin;
use Imper86\HttpClientBuilder\Builder;
use Imper86\HttpClientBuilder\BuilderInterface;
use Imper86\PhpBaselinkerApi\Model\ResourceInterface;
use Imper86\PhpBaselinkerApi\Resource\Orders;
use Imper86\PhpBaselinkerApi\Resource\ProductsStorage;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Class BaselinkerApi
 * @package Imper86\PhpBaselinkerApi
 *
 * @method Orders orders()
 * @method ProductsStorage productsStorage()
 */
class BaselinkerApi implements BaselinkerApiInterface
{
    /**
     * @var string
     */
    private string $apiToken;
    /**
     * @var BuilderInterface
     */
    private BuilderInterface $builder;

    /**
     * BaselinkerApi constructor.
     * @param string $apiToken
     * @param BuilderInterface|null $builder
     */
    public function __construct(string $apiToken, ?BuilderInterface $builder = null)
    {
        $this->apiToken = $apiToken;
        $this->builder = $builder ?: new Builder();
    }

    /**
     * @param string $name
     * @param mixed[] $arguments
     * @return ResourceInterface
     */
    public function __call(string $name, array $arguments): ResourceInterface
    {
        return $this->api($name);
    }

    /**
     * @param string $resource
     * @return ResourceInterface
     */
    public function api(string $resource): ResourceInterface
    {
        $className = 'Imper86\\PhpBaselinkerApi\\Resource\\' . ucfirst($resource);

        if (class_exists($className) && is_subclass_of($className, ResourceInterface::class)) {
            return new $className($this);
        }

        throw new \InvalidArgumentException(sprintf('%s resource not found', $resource));
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param Plugin $plugin
     */
    public function addPlugin(Plugin $plugin): void
    {
        $this->builder->addPlugin($plugin);
    }

    /**
     * @param string $fqcn
     */
    public function removePlugin(string $fqcn): void
    {
        $this->builder->removePlugin($fqcn);
    }

    /**
     * @param CacheItemPoolInterface $cacheItemPool
     * @param mixed[] $config
     */
    public function addCache(CacheItemPoolInterface $cacheItemPool, array $config = []): void
    {
        $this->builder->addCache($cacheItemPool, $config);
    }

    /**
     *
     */
    public function removeCache(): void
    {
        $this->builder->removeCache();
    }

    /**
     * @return string
     */
    public function getApiToken(): string
    {
        return $this->apiToken;
    }
}
