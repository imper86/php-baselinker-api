<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\AddOrderProduct;


use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class AddOrderProductRequest extends AbstractRequest
{
    protected int $orderId;
    protected string $storage;
    protected string $storageId;
    protected string $productId;
    protected string $variantId;
    protected string $auctionId;
    protected string $name;
    protected string $sku;
    protected string $ean;
    protected string $attributes;
    protected float $priceBrutto;
    protected int $taxRate;
    protected int $quantity;
    protected float $weight;

    public function __construct(
        int $orderId,
        string $storage,
        string $storageId,
        string $productId,
        string $variantId,
        string $auctionId,
        string $name,
        string $sku,
        string $ean,
        string $attributes,
        float $priceBrutto,
        int $taxRate,
        int $quantity,
        float $weight
    )
    {
        $this->orderId = $orderId;
        $this->storage = $storage;
        $this->storageId = $storageId;
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->auctionId = $auctionId;
        $this->name = $name;
        $this->sku = $sku;
        $this->ean = $ean;
        $this->attributes = $attributes;
        $this->priceBrutto = $priceBrutto;
        $this->taxRate = $taxRate;
        $this->quantity = $quantity;
        $this->weight = $weight;
    }
}
