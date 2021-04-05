<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class GetInvoicesRequest implements RequestInterface
{
    private ?int $invoiceId;
    private ?int $orderId;
    private ?int $dateFrom;
    private ?int $idFrom;
    private ?int $seriesId;
    private ?bool $getExternalInvoices;

    public function __construct(
        ?int $invoiceId = null,
        ?int $orderId = null,
        ?int $dateFrom = null,
        ?int $idFrom = null,
        ?int $seriesId = null,
        ?bool $getExternalInvoices = null
    ) {
        $this->invoiceId = $invoiceId;
        $this->orderId = $orderId;
        $this->dateFrom = $dateFrom;
        $this->idFrom = $idFrom;
        $this->seriesId = $seriesId;
        $this->getExternalInvoices = $getExternalInvoices;
    }

    public function toArray(): array
    {
        return [
            'invoice_id' => $this->invoiceId,
            'order_id' => $this->orderId,
            'date_from' => $this->dateFrom,
            'id_from' => $this->idFrom,
            'series_id' => $this->seriesId,
            'get_external_invoices' => $this->getExternalInvoices,
        ];
    }
}
