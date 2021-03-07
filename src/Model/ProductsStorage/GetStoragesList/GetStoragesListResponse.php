<?php

namespace Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetStoragesList;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetStoragesListResponse extends AbstractResponse
{
    /**
     * @var Storage[]|null
     */
    private ?array $storages;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['storages']) && is_array($this->body['storages'])) {
            $this->storages = [];

            foreach ($this->body['storages'] as $storageData) {
                $this->storages[] = new Storage(
                    $storageData['storage_id'],
                    $storageData['name'],
                    $storageData['methods'],
                );
            }
        }
    }
}
