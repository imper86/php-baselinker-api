<?php


namespace Imper86\PhpBaselinkerApi;


use Http\Client\Common\Plugin;
use Imper86\HttpClientBuilder\BuilderInterface;
use Imper86\PhpBaselinkerApi\Model\ResourceInterface;
use Imper86\PhpBaselinkerApi\Resource\Orders;
use Imper86\PhpBaselinkerApi\Resource\ProductCatalog;
use Imper86\PhpBaselinkerApi\Resource\ProductsStorage;
use Psr\Cache\CacheItemPoolInterface;

/**
 * @method Orders orders()
 * @method ProductsStorage productsStorage()
 * @method ProductCatalog productCatalog()
 */
interface BaselinkerApiInterface
{
    /**
     * @param string $resource
     * @return ResourceInterface
     */
    public function api(string $resource): ResourceInterface;

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface;

    /**
     * @param Plugin $plugin
     */
    public function addPlugin(Plugin $plugin): void;

    /**
     * @param string $fqcn
     */
    public function removePlugin(string $fqcn): void;

    /**
     * @param CacheItemPoolInterface $cacheItemPool
     * @param mixed[] $config
     */
    public function addCache(CacheItemPoolInterface $cacheItemPool, array $config = []): void;

    /**
     *
     */
    public function removeCache(): void;

    /**
     * @return string
     */
    public function getApiToken(): string;
}
