<?php

namespace SlickPay\User;

use SlickPay\Core;

/**
 * Contact
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Contact
{
    /**
     * Store a new contact in storage.
     *
     * @param  array $data  Contact data
     * @return array
     */
    public static function store(array $data): array
    {
        return Core::store("users/contacts", $data);
    }

    /**
     * Get the specified contact data.
     *
     * @param  string $uuid  The contact uuid
     * @return array
     */
    public static function show(string $uuid): array
    {
        return Core::show("users/contacts", $uuid);
    }

    /**
     * Get a listing of the user contact.
     *
     * @param  integer  $offset  Pagination offset
     * @param  integer  $page  Pagination page to display
     * @return array
     */
    public static function index(int $offset = 0, int $page = 0): array
    {
        return Core::index("users/contacts", $offset, $page);
    }

    /**
     * Update the specified contact in storage.
     *
     * @param  string $uuid  The contact uuid
     * @param  array $data  Contact data
     * @return array
     */
    public static function update(string $uuid, array $data): array
    {
        return Core::update("users/contacts", $uuid, $data);
    }

    /**
     * Remove the specified contact from storage.
     *
     * @param  string $uuid  The contact uuid
     * @return array
     */
    public static function destroy(string $uuid): array
    {
        return Core::destroy("users/contacts", $uuid);
    }
}
