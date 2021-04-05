<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetJournalListResponse extends AbstractResponse
{
    /**
     * @var Log[]|null
     */
    private ?array $logs = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['logs']) && is_array($this->body['logs'])) {
            foreach ($this->body['logs'] as $logData) {
                $this->logs[] = new Log(
                    $logData['log_id'],
                    $logData['order_id'],
                    $logData['log_type'],
                    $logData['object_id'],
                    $logData['date'],
                );
            }
        }
    }

    /**
     * @return Log[]|null
     */
    public function getLogs(): ?array
    {
        return $this->logs;
    }
}
