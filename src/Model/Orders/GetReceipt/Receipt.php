<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt;

/**
 * Class Receipt
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt
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
    private int $year;
    /**
     * @var int
     */
    private int $month;
    /**
     * @var int
     */
    private int $subId;
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
     * @var string
     */
    private string $currency;
    /**
     * @var float
     */
    private float $totalPriceBrutto;
    /**
     * @var string
     */
    private string $externalReceiptNumber;
    /**
     * @var ReceiptExchange
     */
    private ReceiptExchange $exchange;
    /**
     * @var ReceiptItem[]
     */
    private array $items;

    /**
     * Receipt constructor.
     * @param int $receiptId
     * @param int $seriesId
     * @param string $receiptFullNr
     * @param int $year
     * @param int $month
     * @param int $subId
     * @param int $orderId
     * @param int $dateAdd
     * @param string $paymentMethod
     * @param string $nip
     * @param string $currency
     * @param float $totalPriceBrutto
     * @param string $externalReceiptNumber
     * @param ReceiptExchange $exchange
     * @param ReceiptItem[] $items
     */
    public function __construct(
        int $receiptId,
        int $seriesId,
        string $receiptFullNr,
        int $year,
        int $month,
        int $subId,
        int $orderId,
        int $dateAdd,
        string $paymentMethod,
        string $nip,
        string $currency,
        float $totalPriceBrutto,
        string $externalReceiptNumber,
        ReceiptExchange $exchange,
        array $items
    ) {
        $this->receiptId = $receiptId;
        $this->seriesId = $seriesId;
        $this->receiptFullNr = $receiptFullNr;
        $this->year = $year;
        $this->month = $month;
        $this->subId = $subId;
        $this->orderId = $orderId;
        $this->dateAdd = $dateAdd;
        $this->paymentMethod = $paymentMethod;
        $this->nip = $nip;
        $this->currency = $currency;
        $this->totalPriceBrutto = $totalPriceBrutto;
        $this->externalReceiptNumber = $externalReceiptNumber;
        $this->exchange = $exchange;
        $this->items = $items;
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
            $data['year'],
            $data['month'],
            $data['sub_id'],
            $data['order_id'],
            $data['date_add'],
            $data['payment_method'],
            $data['nip'],
            $data['currency'],
            $data['total_price_brutto'],
            $data['external_receipt_number'],
            ReceiptExchange::fromPrimitives($data),
            array_map(
                fn(array $itemData) => ReceiptItem::fromPrimitives($itemData),
                $data['items'],
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
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getSubId(): int
    {
        return $this->subId;
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
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return float
     */
    public function getTotalPriceBrutto(): float
    {
        return $this->totalPriceBrutto;
    }

    /**
     * @return string
     */
    public function getExternalReceiptNumber(): string
    {
        return $this->externalReceiptNumber;
    }

    /**
     * @return ReceiptExchange
     */
    public function getExchange(): ReceiptExchange
    {
        return $this->exchange;
    }

    /**
     * @return ReceiptItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
