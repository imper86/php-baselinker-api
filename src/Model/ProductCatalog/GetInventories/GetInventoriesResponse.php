<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\ProductCatalog\GetInventories;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

use function array_map;

class GetInventoriesResponse extends AbstractResponse
{
    /**
     * @var array<int, Inventory>|null
     */
    private ?array $inventories = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['inventories'])) {
            $this->inventories = array_map(
                fn (array $data): Inventory => Inventory::fromPrimitives($data),
                $this->body['inventories'],
            );
        }
    }

    /**
     * @return Inventory[]|null
     */
    public function getInventories(): ?array
    {
        return $this->inventories;
    }
}
