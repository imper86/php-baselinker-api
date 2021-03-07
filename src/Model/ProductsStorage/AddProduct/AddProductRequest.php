<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\AddProduct;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class AddProductRequest implements RequestInterface
{
    private string $storageId;
    private ?string $productId;
    private int $categoryId;
    private string $name;
    private int $quantity;
    private float $priceBrutto;
    private int $taxRate;
    private ?string $ean;
    private ?string $sku;
    private ?float $priceWholesaleNetto;
    private ?float $weight;
    private ?string $description;
    private ?string $descriptionExtra1;
    private ?string $descriptionExtra2;
    private ?string $descriptionExtra3;
    private ?string $descriptionExtra4;
    private ?string $manName;
    private ?ImagesCollection $images;
    private ?FeaturesCollection $features;

    public function __construct(
        string $storageId,
        ?string $productId,
        int $categoryId,
        string $name,
        int $quantity,
        float $priceBrutto,
        int $taxRate,
        ?string $ean = null,
        ?string $sku = null,
        ?float $priceWholesaleNetto = null,
        ?float $weight = null,
        ?string $description = null,
        ?string $descriptionExtra1 = null,
        ?string $descriptionExtra2 = null,
        ?string $descriptionExtra3 = null,
        ?string $descriptionExtra4 = null,
        ?string $manName = null,
        ?ImagesCollection $images = null,
        ?FeaturesCollection $features = null
    ) {
        $this->storageId = $storageId;
        $this->productId = $productId;
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->priceBrutto = $priceBrutto;
        $this->taxRate = $taxRate;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->priceWholesaleNetto = $priceWholesaleNetto;
        $this->weight = $weight;
        $this->description = $description;
        $this->descriptionExtra1 = $descriptionExtra1;
        $this->descriptionExtra2 = $descriptionExtra2;
        $this->descriptionExtra3 = $descriptionExtra3;
        $this->descriptionExtra4 = $descriptionExtra4;
        $this->manName = $manName;
        $this->images = $images;
        $this->features = $features;
    }

    public function toArray(): array
    {
        return [
            'storage_id' => $this->storageId,
            'product_id' => $this->productId,
            'ean' => $this->ean,
            'sku' => $this->sku,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'price_brutto' => $this->priceBrutto,
            'price_wholesale_netto' => $this->priceWholesaleNetto,
            'tax_rate' => $this->taxRate,
            'weight' => $this->weight,
            'description' => $this->description,
            'description_extra1' => $this->descriptionExtra1,
            'description_extra2' => $this->descriptionExtra2,
            'description_extra3' => $this->descriptionExtra3,
            'description_extra4' => $this->descriptionExtra4,
            'man_name' => $this->manName,
            'category_id' => $this->categoryId,
            'images' => $this->images
                ? array_map(
                    fn(Image $image) => $image->__toString(),
                    iterator_to_array($this->images->getIterator()),
                )
                : null,
            'features' => $this->features
                ? array_map(
                    fn(Feature $feature) => $feature->toArray(),
                    iterator_to_array($this->features->getIterator()),
                )
                : null,
        ];
    }
}
