<?php

namespace SlickPay\User;

use SlickPay\Core;

/**
 * Invoice
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Invoice
{
    /**
     * Calculate invoice commission.
     *
     * @param  float $amount  Invoice amount
     * @return array
     */
    public static function commission(float $amount): array
    {
        return Core::commission("users/invoices/commission", [
            'amount' => $amount
        ]);
    }

    /**
     * Store a new invoice in storage.
     *
     * @param  array $data  Invoice data
     * @return array
     */
    public static function store(array $data): array
    {
        return Core::store("users/invoices", $data);
    }

    /**
     * Get the specified invoice data.
     *
     * @param  integer $id  The invoice id
     * @return array
     */
    public static function show(int $id): array
    {
        return Core::show("users/invoices", $id);
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
        return Core::index("users/invoices", $offset, $page);
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
        return Core::update("users/invoices", $id, $data);
    }

    /**
     * Remove the specified invoice from storage.
     *
     * @param  integer $id  The invoice id
     * @return array
     */
    public static function destroy(int $id): array
    {
        return Core::destroy("users/invoices", $id);
    }
}
