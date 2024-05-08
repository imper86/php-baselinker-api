<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventories;

class Inventory
{
    private int $inventoryId;
    private string $name;
    private string $description;
    private array $languages;
    private string $defaultLanguage;
    private array $priceGroups;
    private int $defaultPriceGroup;
    private array $warehouses;
    private string $defaultWarehouse;
    private bool $reservations;
    private bool $default;

    public function __construct(
        int $inventoryId,
        string $name,
        string $description,
        array $languages,
        string $defaultLanguage,
        array $priceGroups,
        int $defaultPriceGroup,
        array $warehouses,
        string $defaultWarehouse,
        bool $reservations,
        bool $default
    ) {
        $this->inventoryId = $inventoryId;
        $this->name = $name;
        $this->description = $description;
        $this->languages = $languages;
        $this->defaultLanguage = $defaultLanguage;
        $this->priceGroups = $priceGroups;
        $this->defaultPriceGroup = $defaultPriceGroup;
        $this->warehouses = $warehouses;
        $this->defaultWarehouse = $defaultWarehouse;
        $this->reservations = $reservations;
        $this->default = $default;
    }

    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['inventory_id'],
            $data['name'],
            $data['description'],
            $data['languages'],
            $data['default_language'],
            $data['price_groups'],
            $data['default_price_group'],
            $data['warehouses'],
            $data['default_warehouse'],
            $data['reservations'],
            $data['is_default'],
        );
    }

    public function getInventoryId(): int
    {
        return $this->inventoryId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function getDefaultLanguage(): string
    {
        return $this->defaultLanguage;
    }

    public function getPriceGroups(): array
    {
        return $this->priceGroups;
    }

    public function getDefaultPriceGroup(): int
    {
        return $this->defaultPriceGroup;
    }

    public function getWarehouses(): array
    {
        return $this->warehouses;
    }

    public function getDefaultWarehouse(): string
    {
        return $this->defaultWarehouse;
    }

    public function isReservations(): bool
    {
        return $this->reservations;
    }

    public function isDefault(): bool
    {
        return $this->default;
    }
}
