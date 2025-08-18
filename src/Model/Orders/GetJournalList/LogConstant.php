<?php

declare(strict_types=1);

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList;

class LogConstant
{

    public const LOG_TYPE_ORDER_CREATION = 1;
    public const LOG_TYPE_DOF_DOWNLOAD = 2;
    public const LOG_TYPE_PAYMENT = 3;
    public const LOG_TYPE_REMOVAL = 4;
    public const LOG_TYPE_MERGING = 5;
    public const LOG_TYPE_SPLITTING = 6;
    public const LOG_TYPE_INVOICE_ISSUING = 7;
    public const LOG_TYPE_RECEIPT_ISSUING = 8;
    public const LOG_TYPE_PACKAGE_CREATION = 9;
    public const LOG_TYPE_PACKAGE_DELETION = 10;
    public const LOG_TYPE_EDITING_DELIVERY_DATA = 11;
    public const LOG_TYPE_ADDING_PRODUCT = 12;
    public const LOG_TYPE_EDITING_PRODUCT = 13;
    public const LOG_TYPE_REMOVING_PRODUCT = 14;
    public const LOG_TYPE_ADDING_TO_BLACKLIST = 15;
    public const LOG_TYPE_EDITING_ORDER_DATA = 16;
    public const LOG_TYPE_COPYING_ORDER = 17;
    public const LOG_TYPE_ORDER_STATUS_CHANGE = 18;
    public const LOG_TYPE_INVOICE_DELETION = 19;
    public const LOG_TYPE_RECEIPT_DELETION = 20;
    public const LOG_TYPE_EDITING_INVOICE_DATA = 21;

    public const LOG_OBJECT_ID_MERGED_ORDER = 5;
    public const LOG_OBJECT_ID_NEW_ORDER = 6;
    public const LOG_OBJECT_ID_INVOICE = 7;
    public const LOG_OBJECT_ID_CREATED_PARCEL = 9;
    public const LOG_OBJECT_ID_DELETED_PARCEL = 10;
    public const LOG_OBJECT_ID_DELETED_PRODUCT = 14;
    public const LOG_OBJECT_ID_CREATED_ORDER = 17;
    public const LOG_OBJECT_ID_ORDER_STATUS = 18;
}