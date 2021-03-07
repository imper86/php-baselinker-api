<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddCategory;


use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Class AddCategoryResponse
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddCategory
 */
class AddCategoryResponse extends AbstractResponse
{
    /**
     * @var string|null
     */
    private ?string $storageId;
    /**
     * @var int|null
     */
    private ?int $categoryId;

    /**
     * AddCategoryResponse constructor.
     * @param HttpResponseInterface $httpResponse
     */
    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->storageId = $this->body['storage_id'] ?? null;
        $this->categoryId = $this->body['category_id'] ?? null;
    }

    /**
     * @return string|null
     */
    public function getStorageId(): ?string
    {
        return $this->storageId;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
}
