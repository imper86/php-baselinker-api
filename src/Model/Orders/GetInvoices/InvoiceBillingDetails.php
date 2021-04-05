<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices;

class InvoiceBillingDetails
{
    private string $fullname;
    private string $company;
    private string $nip;
    private string $address;
    private string $postcode;
    private string $city;
    private string $country;
    private string $countryCode;

    public function __construct(
        string $fullname,
        string $company,
        string $nip,
        string $address,
        string $postcode,
        string $city,
        string $country,
        string $countryCode
    ) {
        $this->fullname = $fullname;
        $this->company = $company;
        $this->nip = $nip;
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
            $data['invoice_fullname'],
            $data['invoice_company'],
            $data['invoice_nip'],
            $data['invoice_address'],
            $data['invoice_postcode'],
            $data['invoice_city'],
            $data['invoice_country'],
            $data['invoice_country_code'],
        );
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
    public function getNip(): string
    {
        return $this->nip;
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
