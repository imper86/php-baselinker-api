<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetSeries;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetSeriesResponse extends AbstractResponse
{
    /**
     * @var Series[]|null
     */
    private ?array $series = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['series']) && is_array($this->body['series'])) {
            foreach ($this->body['series'] as $seriesData) {
                $this->series[] = Series::fromPrimitives($seriesData);
            }
        }
    }

    /**
     * @return Series[]|null
     */
    public function getSeries(): ?array
    {
        return $this->series;
    }
}
