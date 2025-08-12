<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;

class OrderDelivery
{
    private int $methodId;
    private string $method;
    private float $price;
    private string $packageModule;
    private string $packageNr;
    private string $fullname;
    private string $company;
    private string $address;
    private string $postcode;
    private string $city;
    private string $country;
    private string $countryCode;

    public function __construct(
        int $methodId,
        string $method,
        float $price,
        string $packageModule,
        string $packageNr,
        string $fullname,
        string $company,
        string $address,
        string $postcode,
        string $city,
        string $country,
        string $countryCode
    ) {
        $this->methodId = $methodId;
        $this->method = $method;
        $this->price = $price;
        $this->packageModule = $packageModule;
        $this->packageNr = $packageNr;
        $this->fullname = $fullname;
        $this->company = $company;
        $this->address = $address;
        $this->postcode = $postcode;
        $this->city = $city;
        $this->country = $country;
        $this->countryCode = $countryCode;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['delivery_method_id'],
            $data['delivery_method'],
            $data['delivery_price'],
            $data['delivery_package_module'],
            $data['delivery_package_nr'],
            $data['delivery_fullname'],
            $data['delivery_company'],
            $data['delivery_address'],
            $data['delivery_postcode'],
            $data['delivery_city'],
            $data['delivery_country'],
            $data['delivery_country_code'],
        );
    }

    /**
     * @return int
     */
    public function getMethodId(): int
    {
        return $this->methodId;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPackageModule(): string
    {
        return $this->packageModule;
    }

    /**
     * @return string
     */
    public function getPackageNr(): string
    {
        return $this->packageNr;
    }

    /**
     * @return string
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
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

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}
