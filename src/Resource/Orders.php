<?php

namespace Imper86\PhpBaselinkerApi\Resource;

use Imper86\PhpBaselinkerApi\Model\AbstractResource;
use Imper86\PhpBaselinkerApi\Model\EmptyResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\AddInvoice\AddInvoiceRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\AddInvoice\AddInvoiceResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\AddOrderProduct\AddOrderProductRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\AddOrderProduct\AddOrderProductResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\DeleteOrderProduct\DeleteOrderProductRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices\GetInvoicesRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetInvoices\GetInvoicesResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList\GetJournalListRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList\GetJournalListResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts\GetNewReceiptsRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetNewReceipts\GetNewReceiptsResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrderPaymentsHistory\GetOrderPaymentsHistoryRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrderPaymentsHistory\GetOrderPaymentsHistoryResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrders\GetOrdersRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrders\GetOrdersResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByEmail\GetOrdersByEmailRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByEmail\GetOrdersByEmailResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByPhone\GetOrdersByPhoneRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrdersByPhone\GetOrdersByPhoneResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetOrderStatusList\GetOrderStatusListResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt\GetReceiptRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\GetReceipt\GetReceiptResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\GetSeries\GetSeriesResponse;
use Imper86\PhpBaselinkerApi\Model\Orders\SetOrderFields\SetOrderFieldsRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\SetOrderPayment\SetOrderPaymentRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\SetOrderProductFields\SetOrderProductFieldsRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\SetOrderReceipt\SetOrderReceiptRequest;
use Imper86\PhpBaselinkerApi\Model\Orders\SetOrderStatus\SetOrderStatusRequest;

class Orders extends AbstractResource
{
    public function getJournalList(GetJournalListRequest $request): GetJournalListResponse
    {
        return new GetJournalListResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getOrders(GetOrdersRequest $request): GetOrdersResponse
    {
        return new GetOrdersResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getOrdersByEmail(GetOrdersByEmailRequest $request): GetOrdersByEmailResponse
    {
        return new GetOrdersByEmailResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getOrdersByPhone(GetOrdersByPhoneRequest $request): GetOrdersByPhoneResponse
    {
        return new GetOrdersByPhoneResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function addInvoice(AddInvoiceRequest $request): AddInvoiceResponse
    {
        return new AddInvoiceResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getInvoices(GetInvoicesRequest $request): GetInvoicesResponse
    {
        return new GetInvoicesResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getSeries(): GetSeriesResponse
    {
        return new GetSeriesResponse($this->sendRequest(__FUNCTION__));
    }

    public function getOrderStatusList(): GetOrderStatusListResponse
    {
        return new GetOrderStatusListResponse($this->sendRequest(__FUNCTION__));
    }

    public function getOrderPaymentsHistory(
        GetOrderPaymentsHistoryRequest $request
    ): GetOrderPaymentsHistoryResponse {
        return new GetOrderPaymentsHistoryResponse(
            $this->sendRequest(__FUNCTION__, $request->toArray()),
        );
    }

    public function getNewReceipts(GetNewReceiptsRequest $request): GetNewReceiptsResponse
    {
        return new GetNewReceiptsResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function getReceipt(GetReceiptRequest $request): GetReceiptResponse
    {
        return new GetReceiptResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function setOrderFields(SetOrderFieldsRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function addOrderProduct(AddOrderProductRequest $request): AddOrderProductResponse
    {
        return new AddOrderProductResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function setOrderProductFields(SetOrderProductFieldsRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function deleteOrderProduct(DeleteOrderProductRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function setOrderPayment(SetOrderPaymentRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function setOrderStatus(SetOrderStatusRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }

    public function setOrderReceipt(SetOrderReceiptRequest $request): EmptyResponse
    {
        return new EmptyResponse($this->sendRequest(__FUNCTION__, $request->toArray()));
    }
}
