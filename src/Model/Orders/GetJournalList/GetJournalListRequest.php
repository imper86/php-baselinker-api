<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList;


use Imper86\PhpBaselinkerApi\Model\RequestInterface;

/**
 * Class GetJournalListRequest
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList
 */
class GetJournalListRequest implements RequestInterface
{
    /**
     * @var int|null
     */
    private ?int $lastLogId;
    /**
     * @var int[]|null
     */
    private ?array $logs_types;
    /**
     * @var int|null
     */
    private ?int $orderId;

    /**
     * GetJournalListRequest constructor.
     * @param int|null $lastLogId
     * @param int[]|null $logs_types
     * @param int|null $orderId
     */
    public function __construct(?int $lastLogId = null, ?array $logs_types = null, ?int $orderId = null)
    {
        $this->lastLogId = $lastLogId;
        $this->logs_types = $logs_types;
        $this->orderId = $orderId;
    }

    /**
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [
            'last_log_id' => $this->lastLogId,
            'logs_types' => $this->logs_types,
            'order_id' => $this->orderId,
        ];
    }
}
