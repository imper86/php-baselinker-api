<?php

namespace Imper86\PhpBaselinkerApi\Resource;

use Imper86\PhpBaselinkerApi\Model\AbstractResource;
use Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages\GeOrderPackagesRequest;
use Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages\GeOrderPackagesResponse;

class CourierShipments extends AbstractResource
{
    public function getOrderPackages(GeOrderPackagesRequest $request): GeOrderPackagesResponse
    {
        return new GeOrderPackagesResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }
}
