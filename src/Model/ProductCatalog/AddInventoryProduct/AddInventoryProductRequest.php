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
}