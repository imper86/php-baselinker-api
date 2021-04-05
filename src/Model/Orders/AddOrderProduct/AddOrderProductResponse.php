<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\AddOrderProduct;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class AddOrderProductResponse extends AbstractResponse
{
    private ?int $orderProductid = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        $this->orderProductid = $this->body['order_product_id'] ?? null;
    }

    /**
     * @return int|null
     */
    public function getOrderProductid(): ?int
    {
        return $this->orderProductid;
    }
}
