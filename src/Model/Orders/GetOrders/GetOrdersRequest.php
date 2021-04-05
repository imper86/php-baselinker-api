<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetOrdersRequest implements RequestInterface
{
    private ?int $orderId;
    private ?int $dateConfirmedFrom;
    private ?int $dateFrom;
    private ?int $idFrom;
    private ?bool $getUnconfirmedOrders;
    private ?int $statusId;
    private ?string $filterEmail;

    public function __construct(
        ?int $orderId = null,
        ?int $dateConfirmedFrom = null,
        ?int $dateFrom = null,
        ?int $idFrom = null,
        ?bool $getUnconfirmedOrders = null,
        ?int $statusId = null,
        ?string $filterEmail = null
    ) {
        $this->orderId = $orderId;
        $this->dateConfirmedFrom = $dateConfirmedFrom;
        $this->dateFrom = $dateFrom;
        $this->idFrom = $idFrom;
        $this->getUnconfirmedOrders = $getUnconfirmedOrders;
        $this->statusId = $statusId;
        $this->filterEmail = $filterEmail;
    }

    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'date_confirmed_from' => $this->dateConfirmedFrom,
            'date_from' => $this->dateFrom,
            'id_from' => $this->idFrom,
            'get_unconfirmed_orders' => $this->getUnconfirmedOrders,
            'status_id' => $this->statusId,
            'filter_email' => $this->filterEmail,
        ];
    }
}
