<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

class OrderProduct
{
    private string $storage;
    private int $storageId;
    private int $orderProductId;
    private ?int $productId;
    private ?int $variantId;
    private string $name;
    private string $sku;
    private string $ean;
    private string $location;
    private int $warehouseId;
    private string $auctionId;
    private string $attributes;
    private float $priceBrutto;
    private int $taxRate;
    private int $quantity;
    private float $weight;
    private int $bundleId;

    public function __construct(
        string $storage,
        int $storageId,
        int $orderProductId,
        ?int $productId,
        ?int $variantId,
        string $name,
        string $sku,
        string $ean,
        string $location,
        int $warehouseId,
        string $auctionId,
        string $attributes,
        float $priceBrutto,
        int $taxRate,
        int $quantity,
        float $weight,
        int $bundleId
    ) {
        $this->storage = $storage;
        $this->storageId = $storageId;
        $this->orderProductId = $orderProductId;
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->name = $name;
        $this->sku = $sku;
        $this->ean = $ean;
        $this->location = $location;
        $this->warehouseId = $warehouseId;
        $this->auctionId = $auctionId;
        $this->attributes = $attributes;
        $this->priceBrutto = $priceBrutto;
        $this->taxRate = $taxRate;
        $this->quantity = $quantity;
        $this->weight = $weight;
        $this->bundleId = $bundleId;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        if ('' === $data['product_id']) {
            $data['product_id'] = null;
        }

        if ('' === $data['variant_id']) {
            $data['variant_id'] = null;
        }

        return new self(
            $data['storage'],
            $data['storage_id'],
            $data['order_product_id'],
            $data['product_id'],
            $data['variant_id'],
            $data['name'],
            $data['sku'],
            $data['ean'],
            $data['location'],
            $data['warehouse_id'],
            $data['auction_id'],
            $data['attributes'],
            $data['price_brutto'],
            $data['tax_rate'],
            $data['quantity'],
            $data['weight'],
            $data['bundle_id'],
        );
    }

    /**
     * @return string
     */
    public function getStorage(): string
    {
        return $this->storage;
    }

    /**
     * @return int
     */
    public function getStorageId(): int
    {
        return $this->storageId;
    }

    /**
     * @return int
     */
    public function getOrderProductId(): int
    {
        return $this->orderProductId;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return int
     */
    public function getVariantId(): ?int
    {
        return $this->variantId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return int
     */
    public function getWarehouseId(): int
    {
        return $this->warehouseId;
    }

    /**
     * @return string
     */
    public function getAuctionId(): string
    {
        return $this->auctionId;
    }

    /**
     * @return string
     */
    public function getAttributes(): string
    {
        return $this->attributes;
    }

    /**
     * @return float
     */
    public function getPriceBrutto(): float
    {
        return $this->priceBrutto;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->taxRate;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getBundleId(): int
    {
        return $this->bundleId;
    }
}
