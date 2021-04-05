<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetNewReceiptsResponse extends AbstractResponse
{
    /**
     * @var Receipt[]|null
     */
    private ?array $receipts = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['orders']) && is_array($this->body['orders'])) {
            $this->receipts = array_map(
                fn(array $receiptData) => Receipt::fromPrimitives($receiptData),
                $this->body['orders'],
            );
        }
    }

    /**
     * @return Receipt[]|null
     */
    public function getReceipts(): ?array
    {
        return $this->receipts;
    }
}
