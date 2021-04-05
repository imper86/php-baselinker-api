<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\SetOrderReceipt;


use Imper86\PhpBaselinkerApi\Model\AbstractRequest;

class SetOrderReceiptRequest extends AbstractRequest
{
    protected int $receiptId;
    protected string $receiptNr;
    protected int $date;
    protected bool $printerError;

    public function __construct(int $receiptId, string $receiptNr, int $date, bool $printerError = false)
    {
        $this->receiptId = $receiptId;
        $this->receiptNr = $receiptNr;
        $this->date = $date;
        $this->printerError = $printerError;
    }
}
