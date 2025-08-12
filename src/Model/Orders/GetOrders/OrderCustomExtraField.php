<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

class OrderCustomExtraField
{
    private string $key;
    private $value;

    public function __construct(
        string $key,
        $value
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

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
