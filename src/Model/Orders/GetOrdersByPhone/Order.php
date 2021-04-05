<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByPhone;

class Order
{
    private int $orderId;
    private int $orderStatusId;
    private string $deliveryFullname;
    private string $deliveryCompany;
    private int $dateInStatus;
    private int $dateAdd;

    public function __construct(
        int $orderId,
        int $orderStatusId,
        string $deliveryFullname,
        string $deliveryCompany,
        int $dateInStatus,
        int $dateAdd
    ) {
        $this->orderId = $orderId;
        $this->orderStatusId = $orderStatusId;
        $this->deliveryFullname = $deliveryFullname;
        $this->deliveryCompany = $deliveryCompany;
        $this->dateInStatus = $dateInStatus;
        $this->dateAdd = $dateAdd;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['order_id'],
            $data['order_status_id'],
            $data['delivery_fullname'],
            $data['delivery_company'],
            $data['date_in_status'],
            $data['date_add'],
        );
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @return int
     */
    public function getOrderStatusId(): int
    {
        return $this->orderStatusId;
    }

    /**
     * @return string
     */
    public function getDeliveryFullname(): string
    {
        return $this->deliveryFullname;
    }

    /**
     * @return string
     */
    public function getDeliveryCompany(): string
    {
        return $this->deliveryCompany;
    }

    /**
     * @return int
     */
    public function getDateInStatus(): int
    {
        return $this->dateInStatus;
    }

    /**
     * @return int
     */
    public function getDateAdd(): int
    {
        return $this->dateAdd;
    }
}
