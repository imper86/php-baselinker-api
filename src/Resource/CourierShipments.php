<?php

namespace Imper86\PhpBaselinkerApi\Resource;

use Imper86\PhpBaselinkerApi\Model\AbstractResource;
use Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages\GetOrderPackagesRequest;
use Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages\GetOrderPackagesResponse;

class CourierShipments extends AbstractResource
{
    public function getOrderPackages(GetOrderPackagesRequest $request): GetOrderPackagesResponse
    {
        return new GetOrderPackagesResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }
}
