<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderStatusList;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetOrderStatusListResponse extends AbstractResponse
{
    /**
     * @var Status[]|null
     */
    private ?array $statuses = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['statuses']) && is_array($this->body['statuses'])) {
            foreach ($this->body['statuses'] as $statusData) {
                $this->statuses[] = Status::fromPrimitives($statusData);
            }
        }
    }

    /**
     * @return Status[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->statuses;
    }
}
