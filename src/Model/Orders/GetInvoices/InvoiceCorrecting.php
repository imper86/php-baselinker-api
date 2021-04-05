<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices;

class InvoiceCorrecting
{
    private ?int $toInvoiceId;
    private ?string $reason;
    private ?bool $items;
    private ?bool $data;

    public function __construct(?int $toInvoiceId, ?string $reason, ?bool $items, ?bool $data)
    {
        $this->toInvoiceId = $toInvoiceId;
        $this->reason = $reason;
        $this->items = $items;
        $this->data = $data;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['correcting_to_invoice_id'] ?? null,
            $data['correcting_reason'] ?? null,
            $data['correcting_items'] ?? null,
            $data['correcting_data'] ?? null,
        );
    }

    /**
     * @return int|null
     */
    public function getToInvoiceId(): ?int
    {
        return $this->toInvoiceId;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @return bool|null
     */
    public function getItems(): ?bool
    {
        return $this->items;
    }

    /**
     * @return bool|null
     */
    public function getData(): ?bool
    {
        return $this->data;
    }
}
