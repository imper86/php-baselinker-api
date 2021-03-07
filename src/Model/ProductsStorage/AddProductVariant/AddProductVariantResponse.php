<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProductVariant;


use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AddProductVariantResponse extends AbstractResponse
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
     * @var string|null
     */
    private ?string $variantId;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->storageId = $this->body['storage_id'] ?? null;
        $this->productId = $this->body['product_id'] ?? null;
        $this->variantId = $this->body['variant_id'] ?? null;
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
     * @return string|null
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }
}
