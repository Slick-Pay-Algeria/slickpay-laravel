<?php

namespace SlickPay\User;

use SlickPay\Core;

/**
 * Transfer
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Transfer
{
    /**
     * Calculate transfer commission.
     *
     * @param  float $amount  Transfer amount
     * @return array
     */
    public static function commission(float $amount): array
    {
        return Core::commission("users/transfers/commission", [
            'amount' => $amount
        ]);
    }

    /**
     * Store a new transfer in storage.
     *
     * @param  array $data  Transfer data
     * @return array
     */
    public static function store(array $data): array
    {
        return Core::store("users/transfers", $data);
    }

    /**
     * Get the specified transfer data.
     *
     * @param  integer $id  The transfer id
     * @return array
     */
    public static function show(int $id): array
    {
        return Core::show("users/transfers", $id);
    }

    /**
     * Get a listing of the user transfer.
     *
     * @param  integer  $offset  Pagination offset
     * @param  integer  $page  Pagination page to display
     * @return array
     */
    public static function index(int $offset = 0, int $page = 0): array
    {
        return Core::index("users/transfers", $offset, $page);
    }

    /**
     * Update the specified transfer in storage.
     *
     * @param  integer $id  The transfer id
     * @param  array $data  Transfer data
     * @return array
     */
    public static function update(int $id, array $data): array
    {
        return Core::update("users/transfers", $id, $data);
    }

    /**
     * Remove the specified transfer from storage.
     *
     * @param  integer $id  The transfer id
     * @return array
     */
    public static function destroy(int $id): array
    {
        return Core::destroy("users/transfers", $id);
    }
}
