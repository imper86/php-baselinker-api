<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsList;

class Product
{
    private int $id;
    private ?string $ean;
    private ?string $sku;
    private ?string $name;
    private array $prices;
    private array $stock;

    public function __construct(
        int $id,
        ?string $ean,
        ?string $sku,
        ?string $name,
        array $prices,
        array $stock
    ) {
        $this->id = $id;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->name = $name;
        $this->prices = $prices;
        $this->stock = $stock;
    }

    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['id'] ?? 0,
            $data['ean'] ?? null,
            $data['sku'] ?? null,
            $data['name'] ?? null,
            $data['prices'] ?? [],
            $data['stock'] ?? [],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function getStock(): array
    {
        return $this->stock;
    }
}