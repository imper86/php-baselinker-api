<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventoryProductsData;

class Product
{
    private ?bool $isBundle;
    private ?string $ean;
    private ?string $sku;
    private ?float $taxRate;
    private ?float $weight;
    private ?float $height;
    private ?float $width;
    private ?float $length;
    private ?float $star;
    private ?int $categoryId;
    private ?int $manufacturerId;
    private array $prices;
    private array $stock;
    private array $locations;
    private array $textFields;
    private ?float $averageCost;
    private ?float $averageLandedCost;
    private array $images;
    private array $links;
    private array $variants;
    private ?array $stockErpUnits;

    public function __construct(
        ?bool $isBundle,
        ?string $ean,
        ?string $sku,
        ?float $taxRate,
        ?float $weight,
        ?float $height,
        ?float $width,
        ?float $length,
        ?float $star,
        ?int $categoryId,
        ?int $manufacturerId,
        array $prices,
        array $stock,
        array $locations,
        array $textFields,
        ?float $averageCost,
        ?float $averageLandedCost,
        array $images,
        array $links,
        array $variants,
        ?array $stockErpUnits
    ) {
        $this->isBundle = $isBundle;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->taxRate = $taxRate;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $this->star = $star;
        $this->categoryId = $categoryId;
        $this->manufacturerId = $manufacturerId;
        $this->prices = $prices;
        $this->stock = $stock;
        $this->locations = $locations;
        $this->textFields = $textFields;
        $this->averageCost = $averageCost;
        $this->averageLandedCost = $averageLandedCost;
        $this->images = $images;
        $this->links = $links;
        $this->variants = $variants;
        $this->stockErpUnits = $stockErpUnits;
    }

    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['is_bundle'] ?? null,
            $data['ean'] ?? null,
            $data['sku'] ?? null,
            $data['tax_rate'] ?? null,
            $data['weight'] ?? null,
            $data['height'] ?? null,
            $data['width'] ?? null,
            $data['length'] ?? null,
            $data['star'] ?? null,
            $data['category_id'] ?? null,
            $data['manufacturer_id'] ?? null,
            $data['prices'] ?? [],
            $data['stock'] ?? null,
            $data['locations'] ?? [],
            $data['text_fields'] ?? [],
            $data['average_cost'] ?? null,
            $data['average_landed_cost'] ?? null,
            $data['images'] ?? [],
            $data['links'] ?? [],
            $data['variants'] ?? [],
            $data['stock_erp_units'] ?? null,
        );
    }

    public function getIsBundle(): ?bool
    {
        return $this->isBundle;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function getStar(): ?float
    {
        return $this->star;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getManufacturerId(): ?int
    {
        return $this->manufacturerId;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function getStock(): array
    {
        return $this->stock;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function getTextFields(): array
    {
        return $this->textFields;
    }

    public function getAverageCost(): ?float
    {
        return $this->averageCost;
    }

    public function getAverageLandedCost(): ?float
    {
        return $this->averageLandedCost;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function getVariants(): array
    {
        return $this->variants;
    }

    public function getStockErpUnits(): array
    {
        return $this->stockErpUnits;
    }
}