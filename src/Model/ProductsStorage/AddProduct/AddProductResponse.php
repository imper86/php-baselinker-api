<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct;


use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Class AddProductResponse
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct
 */
class AddProductResponse extends AbstractResponse
{
    /**
     * @var string|null
     */
    private ?string $storageId;
    /**
     * @var string|null
     */
    private ?string $productId;
    /**
     * @var mixed[]|null
     */
    private ?array $warnings;

    /**
     * AddProductResponse constructor.
     * @param HttpResponseInterface $httpResponse
     */
    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->storageId = $this->body['storage_id'] ?? null;
        $this->productId = $this->body['product_id'] ?? null;
        $this->warnings = $this->body['warnings'] ?? null;
    }

    /**
     * @return string|null
     */
    public function getStorageId(): ?string
    {
        return $this->storageId;
    }

    /**
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @return mixed[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
}
