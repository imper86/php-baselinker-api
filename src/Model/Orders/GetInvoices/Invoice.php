<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices;

/**
 * Class Invoice
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices
 */
class Invoice
{
    /**
     * @var int
     */
    private int $invoiceId;
    /**
     * @var int
     */
    private int $orderId;
    /**
     * @var int
     */
    private int $seriesId;
    /**
     * @var string
     */
    private string $type;
    /**
     * @var string
     */
    private string $number;
    /**
     * @var int
     */
    private int $subId;
    /**
     * @var int
     */
    private int $month;
    /**
     * @var int
     */
    private int $year;
    /**
     * @var string
     */
    private string $postfix;
    /**
     * @var int
     */
    private int $dateAdd;
    /**
     * @var int
     */
    private int $dateSell;
    /**
     * @var int
     */
    private int $datePayTo;
    /**
     * @var string
     */
    private string $currency;
    /**
     * @var float
     */
    private float $totalPriceBrutto;
    /**
     * @var float
     */
    private float $totalPriceNetto;
    /**
     * @var string
     */
    private string $payment;
    /**
     * @var string
     */
    private string $additionalInfo;
    /**
     * @var InvoiceBillingDetails
     */
    private InvoiceBillingDetails $billingDetails;
    /**
     * @var string
     */
    private string $seller;
    /**
     * @var InvoiceCorrecting
     */
    private InvoiceCorrecting $correcting;
    /**
     * @var string
     */
    private string $externalInvoiceNumber;
    /**
     * @var InvoiceExchange
     */
    private InvoiceExchange $exchange;
    /**
     * @var int
     */
    private int $externalId;
    /**
     * @var InvoiceItem[]
     */
    private array $items;

    /**
     * Invoice constructor.
     * @param int $invoiceId
     * @param int $orderId
     * @param int $seriesId
     * @param string $type
     * @param string $number
     * @param int $subId
     * @param int $month
     * @param int $year
     * @param string $postfix
     * @param int $dateAdd
     * @param int $dateSell
     * @param int $datePayTo
     * @param string $currency
     * @param float $totalPriceBrutto
     * @param float $totalPriceNetto
     * @param string $payment
     * @param string $additionalInfo
     * @param InvoiceBillingDetails $billingDetails
     * @param string $seller
     * @param InvoiceCorrecting $correcting
     * @param string $externalInvoiceNumber
     * @param InvoiceExchange $exchange
     * @param int $externalId
     * @param InvoiceItem[] $items
     */
    public function __construct(
        int $invoiceId,
        int $orderId,
        int $seriesId,
        string $type,
        string $number,
        int $subId,
        int $month,
        int $year,
        string $postfix,
        int $dateAdd,
        int $dateSell,
        int $datePayTo,
        string $currency,
        float $totalPriceBrutto,
        float $totalPriceNetto,
        string $payment,
        string $additionalInfo,
        InvoiceBillingDetails $billingDetails,
        string $seller,
        InvoiceCorrecting $correcting,
        string $externalInvoiceNumber,
        InvoiceExchange $exchange,
        int $externalId,
        array $items
    ) {
        $this->invoiceId = $invoiceId;
        $this->orderId = $orderId;
        $this->seriesId = $seriesId;
        $this->type = $type;
        $this->number = $number;
        $this->subId = $subId;
        $this->month = $month;
        $this->year = $year;
        $this->postfix = $postfix;
        $this->dateAdd = $dateAdd;
        $this->dateSell = $dateSell;
        $this->datePayTo = $datePayTo;
        $this->currency = $currency;
        $this->totalPriceBrutto = $totalPriceBrutto;
        $this->totalPriceNetto = $totalPriceNetto;
        $this->payment = $payment;
        $this->additionalInfo = $additionalInfo;
        $this->billingDetails = $billingDetails;
        $this->seller = $seller;
        $this->correcting = $correcting;
        $this->externalInvoiceNumber = $externalInvoiceNumber;
        $this->exchange = $exchange;
        $this->externalId = $externalId;
        $this->items = $items;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['invoice_id'],
            $data['order_id'],
            $data['series_id'],
            $data['type'],
            $data['number'],
            $data['sub_id'],
            $data['month'],
            $data['year'],
            $data['postfix'],
            $data['date_add'],
            $data['date_sell'],
            $data['date_pay_to'],
            $data['currency'],
            $data['total_price_brutto'],
            $data['total_price_netto'],
            $data['payment'],
            $data['additional_info'],
            InvoiceBillingDetails::fromPrimitives($data),
            $data['seller'],
            InvoiceCorrecting::fromPrimitives($data),
            $data['external_invoice_number'],
            InvoiceExchange::fromPrimitives($data),
            $data['external_id'],
            array_map(
                fn(array $itemData) => InvoiceItem::fromPrimitives($itemData),
                $data['items'],
            ),
        );
    }

    /**
     * @return int
     */
    public function getInvoiceId(): int
    {
        return $this->invoiceId;
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
    public function getSeriesId(): int
    {
        return $this->seriesId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
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
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function getPostfix(): string
    {
        return $this->postfix;
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
    public function getDateSell(): int
    {
        return $this->dateSell;
    }

    /**
     * @return int
     */
    public function getDatePayTo(): int
    {
        return $this->datePayTo;
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
     * @return float
     */
    public function getTotalPriceNetto(): float
    {
        return $this->totalPriceNetto;
    }

    /**
     * @return string
     */
    public function getPayment(): string
    {
        return $this->payment;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    /**
     * @return InvoiceBillingDetails
     */
    public function getBillingDetails(): InvoiceBillingDetails
    {
        return $this->billingDetails;
    }

    /**
     * @return string
     */
    public function getSeller(): string
    {
        return $this->seller;
    }

    /**
     * @return InvoiceCorrecting
     */
    public function getCorrecting(): InvoiceCorrecting
    {
        return $this->correcting;
    }

    /**
     * @return string
     */
    public function getExternalInvoiceNumber(): string
    {
        return $this->externalInvoiceNumber;
    }

    /**
     * @return InvoiceExchange
     */
    public function getExchange(): InvoiceExchange
    {
        return $this->exchange;
    }

    /**
     * @return int
     */
    public function getExternalId(): int
    {
        return $this->externalId;
    }

    /**
     * @return InvoiceItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
