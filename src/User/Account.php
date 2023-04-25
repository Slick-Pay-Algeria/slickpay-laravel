<?php

namespace SlickPay\User;

use SlickPay\Core;

/**
 * Account
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Account
{
    /**
     * Store a new account in storage.
     *
     * @param  array $data  Account data
     * @return array
     */
    public static function store(array $data): array
    {
        return Core::store("users/accounts", $data);
    }

    /**
     * Get the specified account data.
     *
     * @param  string $uuid  The account uuid
     * @return array
     */
    public static function show(string $uuid): array
    {
        return Core::show("users/accounts", $uuid);
    }

    /**
     * Get a listing of the user account.
     *
     * @param  integer  $offset  Pagination offset
     * @param  integer  $page  Pagination page to display
     * @return array
     */
    public static function index(int $offset = 0, int $page = 0): array
    {
        return Core::index("users/accounts", $offset, $page);
    }

    /**
     * Update the specified account in storage.
     *
     * @param  string $uuid  The account uuid
     * @param  array $data  Account data
     * @return array
     */
    public static function update(string $uuid, array $data): array
    {
        return Core::update("users/accounts", $uuid, $data);
    }

    /**
     * Remove the specified account from storage.
     *
     * @param  string $uuid  The account uuid
     * @return array
     */
    public static function destroy(int $uuid): array
    {
        return Core::destroy("users/accounts", $uuid);
    }
}
