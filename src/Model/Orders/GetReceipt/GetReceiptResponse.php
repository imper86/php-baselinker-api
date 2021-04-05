<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetReceiptResponse extends AbstractResponse
{
    private ?Receipt $receipt = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['receipt_id'])) {
            $this->receipt = Receipt::fromPrimitives($this->body);
        }
    }

    /**
     * @return Receipt|null
     */
    public function getReceipt(): ?Receipt
    {
        return $this->receipt;
    }
}
