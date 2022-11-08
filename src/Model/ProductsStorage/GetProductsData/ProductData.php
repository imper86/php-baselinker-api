<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData;

/**
 * Class ProductData
 * @package Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsData
 */
class ProductData
{
    /**
     * @var string
     */
    private string $productId;
    /**
     * @var string
     */
    private string $ean;
    /**
     * @var string
     */
    private string $sku;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $quantity;
    /**
     * @var float
     */
    private float $priceNetto;
    /**
     * @var float
     */
    private float $priceBrutto;
    /**
     * @var float
     */
    private float $priceWholesaleNetto;
    /**
     * @var int
     */
    private int $taxRate;
    /**
     * @var float
     */
    private float $weight;
    /**
     * @var string|null
     */
    private ?string $manName;
    /**
     * @var string|null
     */
    private ?string $manImage;
    /**
     * @var int
     */
    private int $categoryId;
    /**
     * @var string[]
     */
    private array $images;
    /**
     * @var Variant[]
     */
    private array $variants;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var string
     */
    private ?string $descriptionExtra1;
    /**
     * @var string
     */
    private ?string $descriptionExtra2;
    /**
     * @var string
     */
    private ?string $descriptionExtra3;
    /**
     * @var string
     */
    private ?string $descriptionExtra4;
    /**
     * @var Feature[]
     */
    private array $features;

    /**
     * ProductData constructor.
     * @param string $productId
     * @param string $ean
     * @param string $sku
     * @param string $name
     * @param int $quantity
     * @param float $priceNetto
     * @param float $priceBrutto
     * @param float $priceWholesaleNetto
     * @param int $taxRate
     * @param float $weight
     * @param string|null $manName
     * @param string|null $manImage
     * @param int $categoryId
     * @param string[] $images
     * @param Feature[] $features
     * @param Variant[] $variants
     * @param string $description
     * @param string $descriptionExtra1
     * @param string $descriptionExtra2
     * @param string $descriptionExtra3
     * @param string $descriptionExtra4
     */
    public function __construct(
        string $productId,
        string $ean,
        string $sku,
        string $name,
        int $quantity,
        float $priceNetto,
        float $priceBrutto,
        float $priceWholesaleNetto,
        int $taxRate,
        float $weight,
        ?string $manName,
        ?string $manImage,
        int $categoryId,
        array $images,
        array $features,
        array $variants,
        ?string $description,
        ?string $descriptionExtra1,
        ?string $descriptionExtra2,
        ?string $descriptionExtra3,
        ?string $descriptionExtra4
    ) {
        $this->productId = $productId;
        $this->ean = $ean;
        $this->sku = $sku;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->priceNetto = $priceNetto;
        $this->priceBrutto = $priceBrutto;
        $this->priceWholesaleNetto = $priceWholesaleNetto;
        $this->taxRate = $taxRate;
        $this->weight = $weight;
        $this->manName = $manName;
        $this->manImage = $manImage;
        $this->categoryId = $categoryId;
        $this->images = $images;
        $this->variants = $variants;
        $this->description = $description;
        $this->descriptionExtra1 = $descriptionExtra1;
        $this->descriptionExtra2 = $descriptionExtra2;
        $this->descriptionExtra3 = $descriptionExtra3;
        $this->descriptionExtra4 = $descriptionExtra4;
        $this->features = $features;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['product_id'],
            $data['ean'],
            $data['sku'],
            $data['name'],
            $data['quantity'],
            $data['price_netto'],
            $data['price_brutto'],
            $data['price_wholesale_netto'],
            $data['tax_rate'],
            $data['weight'],
            $data['man_name'],
            $data['man_image'],
            $data['category_id'],
            $data['images'],
            array_map(
                fn(array $featureData) => new Feature($featureData[0], $featureData[1]),
                $data['features'],
            ),
            array_map(
                fn(array $variantData) => new Variant(
                    $variantData['variant_id'],
                    $variantData['ean'],
                    $variantData['sku'],
                    $variantData['name'],
                    $variantData['price'],
                    $variantData['quantity'],
                ),
                $data['variants'],
            ),
            $data['description'],
            $data['description_extra1'],
            $data['description_extra2'],
            $data['description_extra3'],
            $data['description_extra4'],
        );
    }

    /**
     * @return string
     */
    public function getProductId(): string
    {
        return $this->productId;
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
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
    public function getPriceNetto(): float
    {
        return $this->priceNetto;
    }

    /**
     * @return float
     */
    public function getPriceBrutto(): float
    {
        return $this->priceBrutto;
    }

    /**
     * @return float
     */
    public function getPriceWholesaleNetto(): float
    {
        return $this->priceWholesaleNetto;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->taxRate;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return string|null
     */
    public function getManName(): ?string
    {
        return $this->manName;
    }

    /**
     * @return string|null
     */
    public function getManImage(): ?string
    {
        return $this->manImage;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return string[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @return Variant[]
     */
    public function getVariants(): array
    {
        return $this->variants;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDescriptionExtra1(): string
    {
        return $this->descriptionExtra1;
    }

    /**
     * @return string
     */
    public function getDescriptionExtra2(): string
    {
        return $this->descriptionExtra2;
    }

    /**
     * @return string
     */
    public function getDescriptionExtra3(): string
    {
        return $this->descriptionExtra3;
    }

    /**
     * @return string
     */
    public function getDescriptionExtra4(): string
    {
        return $this->descriptionExtra4;
    }

    /**
     * @return Feature[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
}
