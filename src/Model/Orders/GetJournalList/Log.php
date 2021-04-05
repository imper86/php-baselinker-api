<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList;


class Log
{
    private int $id;
    private int $orderId;
    private int $logType;
    private int $objectId;
    private int $date;

    public function __construct(int $id, int $orderId, int $logType, int $objectId, int $date)
    {
        $this->id = $id;
        $this->orderId = $orderId;
        $this->logType = $logType;
        $this->objectId = $objectId;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
    public function getLogType(): int
    {
        return $this->logType;
    }

    /**
     * @return int
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }
}
