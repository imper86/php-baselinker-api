<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByEmail;


class Order
{
    private int $orderId;
    private int $orderStatusId;
    private int $dateInStatus;
    private int $dateAdd;

    public function __construct(int $orderId, int $orderStatusId, int $dateInStatus, int $dateAdd)
    {
        $this->orderId = $orderId;
        $this->orderStatusId = $orderStatusId;
        $this->dateInStatus = $dateInStatus;
        $this->dateAdd = $dateAdd;
    }

    /**
     * @param int[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['order_id'],
            $data['order_status_id'],
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
