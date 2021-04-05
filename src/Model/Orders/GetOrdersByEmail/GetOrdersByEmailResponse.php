<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByEmail;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetOrdersByEmailResponse extends AbstractResponse
{
    /**
     * @var Order[]|null
     */
    private ?array $orders = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['orders']) && is_array($this->body['orders'])) {
            foreach ($this->body['orders'] as $orderData) {
                $this->orders[] = Order::fromPrimitives($orderData);
            }
        }
    }

    /**
     * @return Order[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }
}
