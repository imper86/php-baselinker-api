<?php

namespace Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * Class GetOrderPackagesResponse
 * @package Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages
 */
class GetOrderPackagesResponse extends AbstractResponse
{
    /**
     * @var Package[]|null
     */
    private ?array $packages = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['packages']) && is_array($this->body['packages'])) {
            $this->packages = array_map(
                fn(array $packageData) => Package::fromPrimitives($packageData),
                $this->body['packages'],
            );
        }
    }

    /**
     * @return Package[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }
}
