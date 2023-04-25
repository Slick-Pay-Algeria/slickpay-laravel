<?php

namespace SlickPay\Merchant;

use SlickPay\Core;

/**
 * Invoice
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Invoice
{

    /**
     * Store a new invoice in storage.
     *
     * @param  array $data  Invoice data
     * @return array
     */
    public static function store(array $data): array
    {
        return Core::store("merchants/invoices", $data);
    }

    /**
     * Get the specified invoice data.
     *
     * @param  integer $id  The invoice id
     * @return array
     */
    public static function show(int $id): array
    {
        return Core::show("merchants/invoices", $id);
    }

    /**
     * Get a listing of the user invoice.
     *
     * @param  integer  $offset  Pagination offset
     * @param  integer  $page  Pagination page to display
     * @return array
     */
    public static function index(int $offset = 0, int $page = 0): array
    {
        return Core::index("merchants/invoices", $offset, $page);
    }

    /**
     * Update the specified invoice in storage.
     *
     * @param  integer $id  The invoice id
     * @param  array $data  Invoice data
     * @return array
     */
    public static function update(int $id, array $data): array
    {
        return Core::update("merchants/invoices", $id, $data);
    }

    /**
     * Remove the specified invoice from storage.
     *
     * @param  integer $id  The invoice id
     * @return array
     */
    public static function destroy(int $id): array
    {
        return Core::destroy("merchants/invoices", $id);
    }
}
