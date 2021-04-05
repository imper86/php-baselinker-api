<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByEmail;


use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetOrdersByEmailRequest implements RequestInterface
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function toArray(): array
    {
        return ['email' => $this->email];
    }
}
