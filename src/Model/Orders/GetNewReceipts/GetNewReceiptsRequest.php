<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

/**
 * Class GetNewReceiptsRequest
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts
 */
class GetNewReceiptsRequest implements RequestInterface
{
    /**
     * @var int|null
     */
    private ?int $seriesId;

    /**
     * GetNewReceiptsRequest constructor.
     * @param int|null $seriesId
     */
    public function __construct(?int $seriesId = null)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return int[]|null[]
     */
    public function toArray(): array
    {
        return ['series_id' => $this->seriesId];
    }
}
