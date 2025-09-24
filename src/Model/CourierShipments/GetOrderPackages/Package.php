<?php

namespace Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages;


/**
 * Class Package
 * @package Imper86\PhpBaselinkerApi\Model\CourierShipments\GetOrderPackages
 */
class Package
{
    /**
     * @var int
     */
    private int $packageId;
    /**
     * @var string
     */
    private string $courierPackageNr;
    /**
     * @var string
     */
    private string $courierInnerNumber;
    /**
     * @var string
     */
    private string $courierCode;
    /**
     * @var string
     */
    private string $courierOtherName;
    /**
     * @var int
     */
    private int $accountId;
    /**
     * @var int
     */
    private int $trackingStatusDate;
    /**
     * @var int
     */
    private int $trackingDeliveryDays;
    /**
     * @var int
     */
    private int $trackingStatus;
    /**
     * @var int
     */
    private int $packageType;
    /**
     * @var string
     */
    private string $trackingUrl;
    /**
     * @var bool
     */
    private bool $isReturn;

    /**
     * Package constructor.
     * @param int $packageId
     * @param string $courierPackageNr
     * @param string $courierInnerNumber
     * @param string $courierCode
     * @param string $courierOtherName
     * @param int $accountId
     * @param int $trackingStatusDate
     * @param int $trackingDeliveryDays
     * @param int $trackingStatus
     * @param int $packageType
     * @param string $trackingUrl
     * @param bool $isReturn
     */
    public function __construct(
        int $packageId,
        string $courierPackageNr,
        string $courierInnerNumber,
        string $courierCode,
        string $courierOtherName,
        int $accountId,
        int $trackingStatusDate,
        int $trackingDeliveryDays,
        int $trackingStatus,
        int $packageType,
        string $trackingUrl,
        bool $isReturn
    ) {
        $this->packageId = $packageId;
        $this->courierPackageNr = $courierPackageNr;
        $this->courierInnerNumber = $courierInnerNumber;
        $this->courierCode = $courierCode;
        $this->courierOtherName = $courierOtherName;
        $this->accountId = $accountId;
        $this->trackingStatusDate = $trackingStatusDate;
        $this->trackingDeliveryDays = $trackingDeliveryDays;
        $this->trackingStatus = $trackingStatus;
        $this->packageType = $packageType;
        $this->trackingUrl = $trackingUrl;
        $this->isReturn = $isReturn;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['package_id'],
            $data['courier_package_nr'],
            $data['courier_inner_number'],
            $data['courier_code'],
            $data['courier_other_name'],
            (int) $data['account_id'], // sometimes comes as empty string
            $data['tracking_status_date'],
            $data['tracking_delivery_days'],
            $data['tracking_status'],
            $data['package_type'],
            $data['tracking_url'],
            $data['is_return'],
        );
    }

    /**
     * @return int
     */
    public function getPackageId(): int
    {
        return $this->packageId;
    }

    /**
     * @return string
     */
    public function getCourierPackageNr(): string
    {
        return $this->courierPackageNr;
    }

    /**
     * @return string
     */
    public function getCourierInnerNumber(): string
    {
        return $this->courierInnerNumber;
    }

    /**
     * @return string
     */
    public function getCourierCode(): string
    {
        return $this->courierCode;
    }

    /**
     * @return string
     */
    public function getCourierOtherName(): string
    {
        return $this->courierOtherName;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @return int
     */
    public function getTrackingStatusDate(): int
    {
        return $this->trackingStatusDate;
    }

    /**
     * @return int
     */
    public function getTrackingDeliveryDays(): int
    {
        return $this->trackingDeliveryDays;
    }

    /**
     * @return int
     */
    public function getTrackingStatus(): int
    {
        return $this->trackingStatus;
    }

    /**
     * @return int
     */
    public function getPackageType(): int
    {
        return $this->packageType;
    }

    /**
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    /**
     * @return bool
     */
    public function isReturn(): bool
    {
        return $this->isReturn;
    }
}
