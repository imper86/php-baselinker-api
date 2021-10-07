<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

/**
 * Class Order
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetOrders
 */
class Order
{
    /**
     * @var int
     */
    private int $orderId;
    /**
     * @var string
     */
    private string $shopOrderId;
    /**
     * @var string
     */
    private string $externalOrderId;
    /**
     * @var string
     */
    private string $orderSource;
    /**
     * @var int
     */
    private int $orderSourceId;
    /**
     * @var string
     */
    private string $orderSourceInfo;
    /**
     * @var int
     */
    private int $orderStatusId;
    /**
     * @var int
     */
    private int $dateAdd;
    /**
     * @var int
     */
    private int $dateConfirmed;
    /**
     * @var int
     */
    private int $dateInStatus;
    /**
     * @var bool
     */
    private bool $confirmed;
    /**
     * @var string
     */
    private string $userLogin;
    /**
     * @var string
     */
    private string $currency;
    /**
     * @var string
     */
    private string $userComments;
    /**
     * @var string
     */
    private string $adminComments;
    /**
     * @var string
     */
    private string $email;
    /**
     * @var string
     */
    private string $phone;
    /**
     * @var OrderPayment
     */
    private OrderPayment $payment;
    /**
     * @var OrderDelivery
     */
    private OrderDelivery $delivery;
    /**
     * @var OrderDeliveryPoint
     */
    private OrderDeliveryPoint $deliveryPoint;
    /**
     * @var OrderInvoice
     */
    private OrderInvoice $invoice;
    /**
     * @var bool
     */
    private bool $wantInvoice;
    /**
     * @var string
     */
    private string $extraField1;
    /**
     * @var string
     */
    private string $extraField2;
    /**
     * @var string
     */
    private string $orderPage;
    /**
     * @var int
     */
    private int $pickState;
    /**
     * @var int
     */
    private int $packState;
    /**
     * @var OrderProduct[]
     */
    private array $products;

    /**
     * Order constructor.
     * @param int $orderId
     * @param string $shopOrderId
     * @param string $externalOrderId
     * @param string $orderSource
     * @param int $orderSourceId
     * @param string $orderSourceInfo
     * @param int $orderStatusId
     * @param int $dateAdd
     * @param int $dateConfirmed
     * @param int $dateInStatus
     * @param bool $confirmed
     * @param string $userLogin
     * @param string $currency
     * @param string $userComments
     * @param string $adminComments
     * @param string $email
     * @param string $phone
     * @param OrderPayment $payment
     * @param OrderDelivery $delivery
     * @param OrderDeliveryPoint $deliveryPoint
     * @param OrderInvoice $invoice
     * @param bool $wantInvoice
     * @param string $extraField1
     * @param string $extraField2
     * @param string $orderPage
     * @param int $pickState
     * @param int $packState
     * @param OrderProduct[] $products
     */
    public function __construct(
        int $orderId,
        string $shopOrderId,
        string $externalOrderId,
        string $orderSource,
        int $orderSourceId,
        string $orderSourceInfo,
        int $orderStatusId,
        int $dateAdd,
        int $dateConfirmed,
        int $dateInStatus,
        bool $confirmed,
        string $userLogin,
        string $currency,
        string $userComments,
        string $adminComments,
        string $email,
        string $phone,
        OrderPayment $payment,
        OrderDelivery $delivery,
        OrderDeliveryPoint $deliveryPoint,
        OrderInvoice $invoice,
        bool $wantInvoice,
        string $extraField1,
        string $extraField2,
        string $orderPage,
        int $pickState,
        int $packState,
        array $products
    ) {
        $this->orderId = $orderId;
        $this->shopOrderId = $shopOrderId;
        $this->externalOrderId = $externalOrderId;
        $this->orderSource = $orderSource;
        $this->orderSourceId = $orderSourceId;
        $this->orderSourceInfo = $orderSourceInfo;
        $this->orderStatusId = $orderStatusId;
        $this->dateAdd = $dateAdd;
        $this->dateConfirmed = $dateConfirmed;
        $this->dateInStatus = $dateInStatus;
        $this->confirmed = $confirmed;
        $this->userLogin = $userLogin;
        $this->currency = $currency;
        $this->userComments = $userComments;
        $this->adminComments = $adminComments;
        $this->email = $email;
        $this->phone = $phone;
        $this->payment = $payment;
        $this->delivery = $delivery;
        $this->deliveryPoint = $deliveryPoint;
        $this->invoice = $invoice;
        $this->wantInvoice = $wantInvoice;
        $this->extraField1 = $extraField1;
        $this->extraField2 = $extraField2;
        $this->orderPage = $orderPage;
        $this->pickState = $pickState;
        $this->packState = $packState;
        $this->products = $products;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['order_id'],
            $data['shop_order_id'],
            $data['external_order_id'],
            $data['order_source'],
            $data['order_source_id'],
            $data['order_source_info'],
            $data['order_status_id'],
            $data['date_add'],
            $data['date_confirmed'],
            $data['date_in_status'],
            $data['confirmed'],
            $data['user_login'],
            $data['currency'],
            $data['user_comments'],
            $data['admin_comments'],
            $data['email'],
            $data['phone'],
            OrderPayment::fromPrimitives($data),
            OrderDelivery::fromPrimitives($data),
            OrderDeliveryPoint::fromPrimitives($data),
            OrderInvoice::fromPrimitives($data),
            $data['want_invoice'],
            $data['extra_field_1'],
            $data['extra_field_2'],
            $data['order_page'],
            $data['pick_state'],
            $data['pack_state'],
            array_map(
                fn(array $productData) => OrderProduct::fromPrimitives($productData),
                $data['products'] ?? [],
            ),
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
     * @return string
     */
    public function getShopOrderId(): string
    {
        return $this->shopOrderId;
    }

    /**
     * @return string
     */
    public function getExternalOrderId(): string
    {
        return $this->externalOrderId;
    }

    /**
     * @return string
     */
    public function getOrderSource(): string
    {
        return $this->orderSource;
    }

    /**
     * @return int
     */
    public function getOrderSourceId(): int
    {
        return $this->orderSourceId;
    }

    /**
     * @return string
     */
    public function getOrderSourceInfo(): string
    {
        return $this->orderSourceInfo;
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
    public function getDateAdd(): int
    {
        return $this->dateAdd;
    }

    /**
     * @return int
     */
    public function getDateConfirmed(): int
    {
        return $this->dateConfirmed;
    }

    /**
     * @return int
     */
    public function getDateInStatus(): int
    {
        return $this->dateInStatus;
    }

    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    /**
     * @return string
     */
    public function getUserLogin(): string
    {
        return $this->userLogin;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getUserComments(): string
    {
        return $this->userComments;
    }

    /**
     * @return string
     */
    public function getAdminComments(): string
    {
        return $this->adminComments;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return OrderPayment
     */
    public function getPayment(): OrderPayment
    {
        return $this->payment;
    }

    /**
     * @return OrderDelivery
     */
    public function getDelivery(): OrderDelivery
    {
        return $this->delivery;
    }

    /**
     * @return OrderDeliveryPoint
     */
    public function getDeliveryPoint(): OrderDeliveryPoint
    {
        return $this->deliveryPoint;
    }

    /**
     * @return OrderInvoice
     */
    public function getInvoice(): OrderInvoice
    {
        return $this->invoice;
    }

    /**
     * @return bool
     */
    public function isWantInvoice(): bool
    {
        return $this->wantInvoice;
    }

    /**
     * @return string
     */
    public function getExtraField1(): string
    {
        return $this->extraField1;
    }

    /**
     * @return string
     */
    public function getExtraField2(): string
    {
        return $this->extraField2;
    }

    /**
     * @return string
     */
    public function getOrderPage(): string
    {
        return $this->orderPage;
    }

    /**
     * @return int
     */
    public function getPickState(): int
    {
        return $this->pickState;
    }

    /**
     * @return int
     */
    public function getPackState(): int
    {
        return $this->packState;
    }

    /**
     * @return OrderProduct[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
