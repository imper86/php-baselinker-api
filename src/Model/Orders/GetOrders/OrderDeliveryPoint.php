<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

/**
 * Class OrderDeliveryPoint
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetOrders
 */
class OrderDeliveryPoint
{
    /**
     * @var string
     */
    private string $id;
    /**
     * @var string
     */
    private string $pointName;
    /**
     * @var string
     */
    private string $pointAddress;
    /**
     * @var string
     */
    private string $postcode;
    /**
     * @var string
     */
    private string $city;

    /**
     * OrderDeliveryPoint constructor.
     * @param string $id
     * @param string $pointName
     * @param string $pointAddress
     * @param string $postcode
     * @param string $city
     */
    public function __construct(
        string $id,
        string $pointName,
        string $pointAddress,
        string $postcode,
        string $city
    ) {
        $this->id = $id;
        $this->pointName = $pointName;
        $this->pointAddress = $pointAddress;
        $this->postcode = $postcode;
        $this->city = $city;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['delivery_point_id'],
            $data['delivery_point_name'],
            $data['delivery_point_address'],
            $data['delivery_point_postcode'],
            $data['delivery_point_city'],
        );
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPointName(): string
    {
        return $this->pointName;
    }

    /**
     * @return string
     */
    public function getPointAddress(): string
    {
        return $this->pointAddress;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
}
