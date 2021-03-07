<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetStoragesList;


/**
 * Class Storage
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage
 */
class Storage
{
    /**
     * @var string
     */
    private string $storageId;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string[]
     */
    private array $methods;

    /**
     * Storage constructor.
     * @param string $storageId
     * @param string $name
     * @param string[] $methods
     */
    public function __construct(string $storageId, string $name, array $methods)
    {
        $this->storageId = $storageId;
        $this->name = $name;
        $this->methods = $methods;
    }

    /**
     * @return string
     */
    public function getStorageId(): string
    {
        return $this->storageId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getMethods(): array
    {
        return $this->methods;
    }
}
