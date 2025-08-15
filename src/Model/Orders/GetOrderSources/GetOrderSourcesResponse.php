<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderSources;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetOrderSourcesResponse extends AbstractResponse
{
    /**
     * @var Source[]|null
     */
    private ?array $sources = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['sources']) && is_array($this->body['sources'])) {
            foreach ($this->body['sources'] as $type => $sourcesData) {
                foreach ($sourcesData as $id => $name ) {
                    $this->sources[] = new Source($id, $type, $name);
                }
            }
        }
    }

    /**
     * @return Source[]|null
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }
}
