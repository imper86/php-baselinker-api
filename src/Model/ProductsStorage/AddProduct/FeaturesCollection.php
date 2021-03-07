<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct;

/**
 * Class FeaturesCollection
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct
 * @implements \IteratorAggregate<int, Feature>
 */
class FeaturesCollection implements \IteratorAggregate
{
    /**
     * @var Feature[]
     */
    private array $features;

    /**
     * FeaturesCollection constructor.
     * @param Feature ...$features
     */
    public function __construct(Feature ...$features)
    {
        $this->features = $features;
    }

    /**
     * @return \Iterator<int, Feature>
     */
    public function getIterator(): \Iterator
    {
        foreach ($this->features as $feature) {
            yield $feature;
        }
    }
}
