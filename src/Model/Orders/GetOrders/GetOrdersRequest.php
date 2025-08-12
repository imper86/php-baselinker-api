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
    private ?bool $includeCustomExtraFields;
    private ?int $statusId;
    private ?string $filterEmail;
    private ?string $filterOrderSource;
    private ?int $filterOrderSourceId;
    private ?bool $withCommission;
    private ?int $filterShopOrderId;

    public function __construct(
        ?int $orderId = null,
        ?int $dateConfirmedFrom = null,
        ?int $dateFrom = null,
        ?int $idFrom = null,
        ?bool $getUnconfirmedOrders = null,
        ?bool $includeCustomExtraFields = null,
        ?int $statusId = null,
        ?string $filterEmail = null,
        ?string $filterOrderSource = null,
        ?int $filterOrderSourceId = null,
        ?bool $withCommission = null,
        ?int $filterShopOrderId = null
    ) {
        $this->orderId = $orderId;
        $this->dateConfirmedFrom = $dateConfirmedFrom;
        $this->dateFrom = $dateFrom;
        $this->idFrom = $idFrom;
        $this->getUnconfirmedOrders = $getUnconfirmedOrders;
        $this->includeCustomExtraFields = $includeCustomExtraFields;
        $this->statusId = $statusId;
        $this->filterEmail = $filterEmail;
        $this->filterOrderSource = $filterOrderSource;
        $this->filterOrderSourceId = $filterOrderSourceId;
        $this->withCommission = $withCommission;
        $this->filterShopOrderId = $filterShopOrderId;
    }

    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'date_confirmed_from' => $this->dateConfirmedFrom,
            'date_from' => $this->dateFrom,
            'id_from' => $this->idFrom,
            'get_unconfirmed_orders' => $this->getUnconfirmedOrders,
            'include_custom_extra_fields' => $this->includeCustomExtraFields,
            'status_id' => $this->statusId,
            'filter_email' => $this->filterEmail,
            'filter_order_source' => $this->filterOrderSource,
            'filter_order_source_id' => $this->filterOrderSourceId,
            'with_commission' => $this->withCommission,
            'filter_shop_order_id' => $this->filterShopOrderId,
        ];
    }
}
