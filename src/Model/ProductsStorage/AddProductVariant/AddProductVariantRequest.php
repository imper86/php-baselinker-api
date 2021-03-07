<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProductVariant;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddProductVariantRequest implements RequestInterface
{
    private string $storageId;
    private string $productId;
    private ?string $variantId;
    private string $name;
    private int $quantity;
    private ?float $priceBrutto;
    private ?string $sku;
    private ?string $ean;

    public function __construct(
        string $storageId,
        string $productId,
        ?string $variantId,
        string $name,
        int $quantity,
        ?float $priceBrutto = null,
        ?string $sku = null,
        ?string $ean = null
    ) {
        $this->storageId = $storageId;
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->priceBrutto = $priceBrutto;
        $this->sku = $sku;
        $this->ean = $ean;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'product_id' => $this->productId,
            'variant_id' => $this->variantId,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'price_brutto' => $this->priceBrutto,
            'sku' => $this->sku,
            'ean' => $this->ean,
        ];
    }
}
