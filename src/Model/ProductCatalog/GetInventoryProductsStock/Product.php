<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsStock;

class Product
{
    private int $productId;
    private array $stock;
    private ?array $reservations;
    private ?array $variants;

    public function __construct(
        int $productId,
        array $stock,
        ?array $reservations,
        ?array $variants
    ) {
        $this->productId = $productId;
        $this->stock = $stock;
        $this->reservations = $reservations;
        $this->variants = $variants;
    }

    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['product_id'],
            $data['stock'],
            $data['reservations'] ?? null,
            $data['variants'] ?? null,
        );
    }

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function getStock(): array
    {
        return $this->stock;
    }

    public function getReservations(): ?array
    {
        return $this->reservations;
    }

    public function getVariants(): ?array
    {
        return $this->variants;
    }
}
