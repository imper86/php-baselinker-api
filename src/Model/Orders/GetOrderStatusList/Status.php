<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderStatusList;

class Status
{
    private int $id;
    private string $name;
    private string $nameForCustomer;
    private string $color;

    public function __construct(int $id, string $name, string $nameForCustomer, string $color)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nameForCustomer = $nameForCustomer;
        $this->color = $color;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self($data['id'], $data['name'], $data['name_for_customer'], $data['color']);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNameForCustomer(): string
    {
        return $this->nameForCustomer;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

}
