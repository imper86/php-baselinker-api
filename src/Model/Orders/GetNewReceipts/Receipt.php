<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts;

/**
 * Class Receipt
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts
 */
class Receipt
{
    /**
     * @var int
     */
    private int $receiptId;
    /**
     * @var int
     */
    private int $seriesId;
    /**
     * @var string
     */
    private string $receiptFullNr;
    /**
     * @var int
     */
    private int $orderId;
    /**
     * @var int
     */
    private int $dateAdd;
    /**
     * @var string
     */
    private string $paymentMethod;
    /**
     * @var string
     */
    private string $nip;
    /**
     * @var Product[]
     */
    private array $products;

    /**
     * Receipt constructor.
     * @param int $receiptId
     * @param int $seriesId
     * @param string $receiptFullNr
     * @param int $orderId
     * @param int $dateAdd
     * @param string $paymentMethod
     * @param string $nip
     * @param Product[] $products
     */
    public function __construct(
        int $receiptId,
        int $seriesId,
        string $receiptFullNr,
        int $orderId,
        int $dateAdd,
        string $paymentMethod,
        string $nip,
        array $products
    ) {
        $this->receiptId = $receiptId;
        $this->seriesId = $seriesId;
        $this->receiptFullNr = $receiptFullNr;
        $this->orderId = $orderId;
        $this->dateAdd = $dateAdd;
        $this->paymentMethod = $paymentMethod;
        $this->nip = $nip;
        $this->products = $products;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['receipt_id'],
            $data['series_id'],
            $data['receipt_full_nr'],
            $data['order_id'],
            $data['date_add'],
            $data['payment_method'],
            $data['nip'],
            array_map(
                fn(array $productData) => Product::fromPrimitives($productData),
                $data['products'] ?? [],
            ),
        );
    }

    /**
     * @return int
     */
    public function getReceiptId(): int
    {
        return $this->receiptId;
    }

    /**
     * @return int
     */
    public function getSeriesId(): int
    {
        return $this->seriesId;
    }

    /**
     * @return string
     */
    public function getReceiptFullNr(): string
    {
        return $this->receiptFullNr;
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
    public function getDateAdd(): int
    {
        return $this->dateAdd;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * @return string
     */
    public function getNip(): string
    {
        return $this->nip;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}
