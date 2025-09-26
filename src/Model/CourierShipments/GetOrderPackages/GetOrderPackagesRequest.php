<?php

namespace Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

/**
 * Class GetOrderPackagesRequest
 * @package Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages
 */
class GetOrderPackagesRequest implements RequestInterface
{
    /**
     * @var int
     */
    private int $orderId;

    /**
     * GetOrderPackagesRequest constructor.
     * @param int $orderId
     */
    public function __construct(int $orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int[]
     */
    public function toArray(): array
    {
        return ['order_id' => $this->orderId];
    }
}
