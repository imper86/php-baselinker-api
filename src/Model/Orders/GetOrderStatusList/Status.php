<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderStatusList;

class Status
{
    private int $id;
    private string $name;
    private string $nameForCustomer;

    public function __construct(int $id, string $name, string $nameForCustomer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nameForCustomer = $nameForCustomer;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self($data['id'], $data['name'], $data['name_for_customer']);
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
}
