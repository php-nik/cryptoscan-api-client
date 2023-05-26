<?php

namespace PhpNik\CryptoScanApiClient;

use PhpNik\CryptoScanApiClient\DTO\Invoice\InvoiceRequest;
use PhpNik\CryptoScanApiClient\DTO\Invoice\InvoiceResponse;
use PhpNik\CryptoScanApiClient\DTO\Invoice\Widget\WidgetRequest;
use PhpNik\CryptoScanApiClient\DTO\Invoice\Widget\WidgetResponse;
use PhpNik\CryptoScanApiClient\DTO\User\UserResponse;

interface ClientInterface
{
    /**
     * @return InvoiceResponse
     */
    public function createInvoice(InvoiceRequest $request);

    /**
     * @return WidgetResponse
     */
    public function createInvoiceWidget(WidgetRequest $request);

    /**
     * @param int $id
     * @return InvoiceResponse
     */
    public function getInvoice($id);

    /**
     * @param string $query
     * @return InvoiceResponse[]
     */
    public function searchInvoices($query);

    /**
     * @return UserResponse
     */
    public function getUserInfo();
}
