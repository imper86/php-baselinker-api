<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\AddInventoryProduct;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddInventoryProductRequest implements RequestInterface
{
    private string $inventoryId;
    private ?string $productId;
    private ?string $parentId;
    private ?bool $isBundle;
    private ?string $ean;
    private ?string $sku;
    private ?float $taxRate;
    private ?float $weight;
    private ?float $height;
    private ?float $width;
    private ?float $length;
    private ?float $averageCost;
    private ?int $star;
    private ?int $manufacturerId;
    private ?int $categoryId;
    private ?array $prices;
    private ?array $stock;
    private ?array $locations;
    private ?array $textFields;
    private ?array $images;
    private ?array $links;
    private ?array $bundleProducts;

    public function __construct(
        string $inventoryId,
        ?string $productId = null,
        ?string $parentId = null,
        ?bool $isBundle = null,
        ?string $ean = null,
        ?string $sku = null,
        ?float $taxRate = null,
        ?float $weight = null,
        ?float $height = null,
        ?float $width = null,
        ?float $length = null,
        ?float $averageCost = null,
        ?int $star = null,
        ?int $manufacturerId = null,
        ?int $categoryId = null,
        ?array $prices = null,
        ?array $stock = null,
        ?array $locations = null,
        ?array $textFields = null,
        ?array $images = null,
        ?array $links = null,
        ?array $bundleProducts = null
    ) {
        $this->inventoryId = $inventoryId;
        $this->productId = $productId;
        $this->parentId = $parentId;
        $this->isBundle = $isBundle;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->taxRate = $taxRate;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $this->averageCost = $averageCost;
        $this->star = $star;
        $this->manufacturerId = $manufacturerId;
        $this->categoryId = $categoryId;
        $this->prices = $prices;
        $this->stock = $stock;
        $this->locations = $locations;
        $this->textFields = $textFields;
        $this->images = $images;
        $this->links = $links;
        $this->bundleProducts = $bundleProducts;
    }

    public function toArray(): array
    {
        return [
            'inventory_id' => $this->inventoryId,
            'product_id' => $this->productId,
            'parent_id' => $this->parentId,
            'is_bundle' => $this->isBundle,
            'ean' => $this->ean,
            'sku' => $this->sku,
            'tax_rate' => $this->taxRate,
            'weight' => $this->weight,
            'height' => $this->height,
            'width' => $this->width,
            'length' => $this->length,
            'average_cost' => $this->averageCost,
            'star' => $this->star,
            'manufacturer_id' => $this->manufacturerId,
            'category_id' => $this->categoryId,
            'prices' => $this->prices,
            'stock' => $this->stock,
            'locations' => $this->locations,
            'text_fields' => $this->textFields,
            'images' => $this->images,
            'links' => $this->links,
            'bundle_products' => $this->bundleProducts,
        ];
    }

    public function getInventoryId(): string
    {
        return $this->inventoryId;
    }

    public function setInventoryId(string $inventoryId): void
    {
        $this->inventoryId = $inventoryId;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getIsBundle(): ?bool
    {
        return $this->isBundle;
    }

    public function setIsBundle(?bool $isBundle): void
    {
        $this->isBundle = $isBundle;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): void
    {
        $this->ean = $ean;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function getTaxRate(): ?float
    {
        return $this->taxRate;
    }

    public function setTaxRate(?float $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): void
    {
        $this->height = $height;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): void
    {
        $this->width = $width;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): void
    {
        $this->length = $length;
    }

    public function getAverageCost(): ?float
    {
        return $this->averageCost;
    }

    public function setAverageCost(?float $averageCost): void
    {
        $this->averageCost = $averageCost;
    }

    public function getStar(): ?int
    {
        return $this->star;
    }

    public function setStar(?int $star): void
    {
        $this->star = $star;
    }

    public function getManufacturerId(): ?int
    {
        return $this->manufacturerId;
    }

    public function setManufacturerId(?int $manufacturerId): void
    {
        $this->manufacturerId = $manufacturerId;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getPrices(): ?array
    {
        return $this->prices;
    }

    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    public function getStock(): ?array
    {
        return $this->stock;
    }

    public function setStock(?array $stock): void
    {
        $this->stock = $stock;
    }

    public function getLocations(): ?array
    {
        return $this->locations;
    }

    public function setLocations(?array $locations): void
    {
        $this->locations = $locations;
    }

    public function getTextFields(): ?array
    {
        return $this->textFields;
    }

    public function setTextFields(?array $textFields): void
    {
        $this->textFields = $textFields;
    }

    public function getImages(): ?array
    {
        return $this->images;
    }

    public function setImages(?array $images): void
    {
        $this->images = $images;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }

    public function getBundleProducts(): ?array
    {
        return $this->bundleProducts;
    }

    public function setBundleProducts(?array $bundleProducts): void
    {
        $this->bundleProducts = $bundleProducts;
    }
}