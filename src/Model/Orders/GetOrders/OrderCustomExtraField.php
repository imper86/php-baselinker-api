<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

class OrderCustomExtraField
{
    private string $key;
    private mixed $value;

    public function __construct(
        string $key,
        mixed $value
    ) {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['key'],
            $data['value'],
        );
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }
}
