<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderPaymentsHistory;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetOrderPaymentsHistoryResponse extends AbstractResponse
{
    /**
     * @var Payment[]|null
     */
    private ?array $payments = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['payments']) && is_array($this->body['payments'])) {
            $this->payments = array_map(
                fn(array $paymentData) => Payment::fromPrimitives($paymentData),
                $this->body['payments'],
            );
        }
    }

    /**
     * @return Payment[]|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }
}
