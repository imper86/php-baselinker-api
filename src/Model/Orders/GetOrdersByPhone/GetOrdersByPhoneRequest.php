<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByPhone;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetOrdersByPhoneRequest implements RequestInterface
{
    private string $phone;

    public function __construct(string $phone)
    {
        $this->phone = $phone;
    }

    public function toArray(): array
    {
        return ['phone' => $this->phone];
    }
}
