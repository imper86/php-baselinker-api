<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetCategories;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetCategoriesResponse extends AbstractResponse
{
    /**
     * @var string|null
     */
    private ?string $storageId;
    /**
     * @var Category[]|null
     */
    private ?array $categories = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->storageId = $this->body['storage_id'] ?? null;

        if (isset($this->body['categories']) && is_array($this->body['categories'])) {
            $this->categories = array_map(
                fn(array $data) => new Category(
                    $data['category_id'],
                    $data['name'],
                    $data['parent_id'],
                ),
                $this->body['categories'],
            );
        }
    }

    /**
     * @return string|null
     */
    public function getStorageId(): ?string
    {
        return $this->storageId;
    }

    /**
     * @return Category[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
}
