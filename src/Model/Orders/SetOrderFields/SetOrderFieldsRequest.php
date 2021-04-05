<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\SetOrderFields;

use Imper86\PhpBaselinkerApi\Model\RequestInterface;

class SetOrderFieldsRequest implements RequestInterface
{
    private int $orderId;
    private ?string $adminComments;
    private ?string $userComments;
    private ?string $paymentMethod;
    private ?bool $paymentMethodCod;
    private ?string $email;
    private ?string $phone;
    private ?string $userLogin;
    private ?string $deliveryMethod;
    private ?float $deliveryPrice;
    private ?string $deliveryFullname;
    private ?string $deliveryCompany;
    private ?string $deliveryAddress;
    private ?string $deliveryPostcode;
    private ?string $deliveryCity;
    private ?string $deliveryCountryCode;
    private ?string $deliveryPointId;
    private ?string $deliveryPointName;
    private ?string $deliveryPointAddress;
    private ?string $deliveryPointPostcode;
    private ?string $deliveryPointCity;
    private ?string $invoiceFullname;
    private ?string $invoiceCompany;
    private ?string $invoiceNip;
    private ?string $invoiceAddress;
    private ?string $invoicePostcode;
    private ?string $invoiceCity;
    private ?string $invoiceCountryCode;
    private ?bool $wantInvoice;
    private ?string $extraField1;
    private ?string $extraField2;
    private ?int $pickState;
    private ?int $packState;

    public function __construct(
        int $orderId,
        ?string $adminComments = null,
        ?string $userComments = null,
        ?string $paymentMethod = null,
        ?bool $paymentMethodCod = null,
        ?string $email = null,
        ?string $phone = null,
        ?string $userLogin = null,
        ?string $deliveryMethod = null,
        ?float $deliveryPrice = null,
        ?string $deliveryFullname = null,
        ?string $deliveryCompany,
        ?string $deliveryAddress = null,
        ?string $deliveryPostcode = null,
        ?string $deliveryCity = null,
        ?string $deliveryCountryCode = null,
        ?string $deliveryPointId = null,
        ?string $deliveryPointName = null,
        ?string $deliveryPointAddress = null,
        ?string $deliveryPointPostcode = null,
        ?string $deliveryPointCity = null,
        ?string $invoiceFullname = null,
        ?string $invoiceCompany = null,
        ?string $invoiceNip = null,
        ?string $invoiceAddress = null,
        ?string $invoicePostcode = null,
        ?string $invoiceCity = null,
        ?string $invoiceCountryCode = null,
        ?bool $wantInvoice = null,
        ?string $extraField1 = null,
        ?string $extraField2 = null,
        ?int $pickState = null,
        ?int $packState = null
    ) {
        $this->orderId = $orderId;
        $this->adminComments = $adminComments;
        $this->userComments = $userComments;
        $this->paymentMethod = $paymentMethod;
        $this->paymentMethodCod = $paymentMethodCod;
        $this->email = $email;
        $this->phone = $phone;
        $this->userLogin = $userLogin;
        $this->deliveryMethod = $deliveryMethod;
        $this->deliveryPrice = $deliveryPrice;
        $this->deliveryFullname = $deliveryFullname;
        $this->deliveryCompany = $deliveryCompany;
        $this->deliveryAddress = $deliveryAddress;
        $this->deliveryPostcode = $deliveryPostcode;
        $this->deliveryCity = $deliveryCity;
        $this->deliveryCountryCode = $deliveryCountryCode;
        $this->deliveryPointId = $deliveryPointId;
        $this->deliveryPointName = $deliveryPointName;
        $this->deliveryPointAddress = $deliveryPointAddress;
        $this->deliveryPointPostcode = $deliveryPointPostcode;
        $this->deliveryPointCity = $deliveryPointCity;
        $this->invoiceFullname = $invoiceFullname;
        $this->invoiceCompany = $invoiceCompany;
        $this->invoiceNip = $invoiceNip;
        $this->invoiceAddress = $invoiceAddress;
        $this->invoicePostcode = $invoicePostcode;
        $this->invoiceCity = $invoiceCity;
        $this->invoiceCountryCode = $invoiceCountryCode;
        $this->wantInvoice = $wantInvoice;
        $this->extraField1 = $extraField1;
        $this->extraField2 = $extraField2;
        $this->pickState = $pickState;
        $this->packState = $packState;
    }

    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'admin_comments' => $this->adminComments,
            'user_comments' => $this->userComments,
            'payment_method' => $this->paymentMethod,
            'payment_method_cod' => $this->paymentMethodCod,
            'email' => $this->email,
            'phone' => $this->phone,
            'user_login' => $this->userLogin,
            'delivery_method' => $this->deliveryMethod,
            'delivery_price' => $this->deliveryPrice,
            'delivery_fullname' => $this->deliveryFullname,
            'delivery_company' => $this->deliveryCompany,
            'delivery_address' => $this->deliveryAddress,
            'delivery_postcode' => $this->deliveryPostcode,
            'delivery_city' => $this->deliveryCity,
            'delivery_country_code' => $this->deliveryCountryCode,
            'delivery_point_id' => $this->deliveryPointId,
            'delivery_point_name' => $this->deliveryPointName,
            'delivery_point_address' => $this->deliveryPointAddress,
            'delivery_point_postcode' => $this->deliveryPointPostcode,
            'delivery_point_city' => $this->deliveryPointCity,
            'invoice_fullname' => $this->invoiceFullname,
            'invoice_company' => $this->invoiceCompany,
            'invoice_nip' => $this->invoiceNip,
            'invoice_address' => $this->invoiceAddress,
            'invoice_postcode' => $this->invoicePostcode,
            'invoice_city' => $this->invoiceCity,
            'invoice_country_code' => $this->invoiceCountryCode,
            'want_invoice' => $this->wantInvoice,
            'extra_field_1' => $this->extraField1,
            'extra_field_2' => $this->extraField2,
            'pick_state' => $this->pickState,
            'pack_state' => $this->packState,
        ];
    }
}
