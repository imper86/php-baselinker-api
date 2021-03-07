<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsPrices;

/**
 * Class Product
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\UpdateProductsPrices
 */
class Product
{
    /**
     * @var int
     */
    private int $productId;
    /**
     * @var int
     */
    private int $variantId;
    /**
     * @var float|null
     */
    private ?float $priceBrutto;
    /**
     * @var float|null
     */
    private ?float $priceWholesaleNetto;
    /**
     * @var int
     */
    private int $taxRate;

    /**
     * Product constructor.
     * @param int $productId
     * @param int $variantId
     * @param float|null $priceBrutto
     * @param float|null $priceWholesaleNetto
     * @param int $taxRate
     */
    public function __construct(
        int $productId,
        int $variantId,
        ?float $priceBrutto,
        ?float $priceWholesaleNetto,
        int $taxRate
    ) {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->priceBrutto = $priceBrutto;
        $this->priceWholesaleNetto = $priceWholesaleNetto;
        $this->taxRate = $taxRate;
    }

    /**
     * @return mixed[]
     */
    public function toArray(): array
    {
        return array_merge(
            [
                'product_id' => $this->productId,
                'variant_id' => $this->variantId,
                'tax_rate' => $this->taxRate,
            ],
            $this->priceBrutto ? ['price_brutto' => $this->priceBrutto] : [],
            $this->priceWholesaleNetto ? ['price_wholesale_netto' => $this->priceWholesaleNetto] : [],
        );
    }
}
