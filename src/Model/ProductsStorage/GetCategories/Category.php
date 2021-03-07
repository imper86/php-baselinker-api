<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetCategories;


class Category
{
    private int $categoryId;
    private string $name;
    private int $parentId;

    public function __construct(int $categoryId, string $name, int $parentId)
    {
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->parentId = $parentId;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
}
