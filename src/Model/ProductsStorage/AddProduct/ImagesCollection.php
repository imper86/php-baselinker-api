<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct;

/**
 * Class ImagesCollection
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct
 * @implements \IteratorAggregate<int, Image>
 */
class ImagesCollection implements \IteratorAggregate
{
    /**
     * @var Image[]
     */
    private array $images;

    /**
     * ImagesCollection constructor.
     * @param Image ...$images
     */
    public function __construct(Image ...$images)
    {
        $this->images = $images;
    }

    /**
     * @return \Iterator<int, Image>
     */
    public function getIterator(): \Iterator
    {
        foreach ($this->images as $image) {
            yield $image;
        }
    }
}
