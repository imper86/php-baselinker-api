<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct;


/**
 * Class Feature
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct
 */
class Feature
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $value;

    /**
     * Feature constructor.
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string[]
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
        ];
    }
}
