<?php


namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsQuantity;


class Variant
{
    private string $variantId;
    private int $quantity;

    public function __construct(string $variantId, int $quantity)
    {
        $this->variantId = $variantId;
        $this->quantity = $quantity;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self($data['variant_id'], $data['quantity']);
    }

    /**
     * @return string
     */
    public function getVariantId(): string
    {
        return $this->variantId;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
