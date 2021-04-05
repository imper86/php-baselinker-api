<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\SetOrderProductFields;

use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

/**
 * Class SetOrderProductFieldsRequest
 * @package Imper86\PhpBaselinkerApi\Model\Orders\SetOrderProductFields
 */
class SetOrderProductFieldsRequest extends AbstractRequest
{
    /**
     * @var int
     */
    protected int $orderId;
    /**
     * @var int
     */
    protected int $orderProductId;
    /**
     * @var string|null
     */
    protected ?string $storage;
    /**
     * @var string|null
     */
    protected ?string $storageId;
    /**
     * @var string|null
     */
    protected ?string $productId;
    /**
     * @var string|null
     */
    protected ?string $variantId;
    /**
     * @var string|null
     */
    protected ?string $auctionId;
    /**
     * @var string|null
     */
    protected ?string $name;
    /**
     * @var string|null
     */
    protected ?string $sku;
    /**
     * @var string|null
     */
    protected ?string $ean;
    /**
     * @var string|null
     */
    protected ?string $attributes;
    /**
     * @var float|null
     */
    protected ?float $priceBrutto;
    /**
     * @var int|null
     */
    protected ?int $taxRate;
    /**
     * @var int|null
     */
    protected ?int $quantity;
    /**
     * @var float|null
     */
    protected ?float $weight;

    /**
     * SetOrderProductFieldsRequest constructor.
     * @param int $orderId
     * @param int $orderProductId
     * @param string|null $storage
     * @param string|null $storageId
     * @param string|null $productId
     * @param string|null $variantId
     * @param string|null $auctionId
     * @param string|null $name
     * @param string|null $sku
     * @param string|null $ean
     * @param string|null $attributes
     * @param float|null $priceBrutto
     * @param int|null $taxRate
     * @param int|null $quantity
     * @param float|null $weight
     */
    public function __construct(
        int $orderId,
        int $orderProductId,
        ?string $storage = null,
        ?string $storageId = null,
        ?string $productId = null,
        ?string $variantId = null,
        ?string $auctionId = null,
        ?string $name = null,
        ?string $sku = null,
        ?string $ean = null,
        ?string $attributes = null,
        ?float $priceBrutto = null,
        ?int $taxRate = null,
        ?int $quantity = null,
        ?float $weight = null
    ) {
        $this->orderId = $orderId;
        $this->orderProductId = $orderProductId;
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
