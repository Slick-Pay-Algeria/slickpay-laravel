<?php

namespace SlickPay\User;

use SlickPay\Core;

/**
 * Aggregation
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Aggregation
{
    /**
     * Calculate aggregation commission.
     *
     * @param  array $params  Request params
     * @return array
     */
    public static function commission(array $params): array
    {
        return Core::commission("users/aggregations/commission", $params);
    }

    /**
     * Store a new aggregation in storage.
     *
     * @param  array $data  Aggregation data
     * @return array
     */
    public static function store(array $data): array
    {
        return Core::store("users/aggregations", $data);
    }

    /**
     * Get the specified aggregation data.
     *
     * @param  integer $id  The account id
     * @return array
     */
    public static function show(int $id): array
    {
        return Core::show("users/aggregations", $id);
    }

    /**
     * Get a listing of the user aggregation.
     *
     * @param  integer  $offset  Pagination offset
     * @param  integer  $page  Pagination page to display
     * @return array
     */
    public static function index(int $offset = 0, int $page = 0): array
    {
        return Core::index("users/aggregations", $offset, $page);
    }

    /**
     * Update the specified aggregation in storage.
     *
     * @param  integer $id  The account id
     * @param  array $data  Aggregation data
     * @return array
     */
    public static function update(int $id, array $data): array
    {
        return Core::update("users/aggregations", $id, $data);
    }

    /**
     * Remove the specified aggregation from storage.
     *
     * @param  integer $id  The account id
     * @return array
     */
    public static function destroy(int $id): array
    {
        return Core::destroy("users/aggregations", $id);
    }
}
