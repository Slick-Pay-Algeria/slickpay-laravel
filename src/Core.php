<?php

namespace SlickPay;

/**
 * Core
 *
 * @author     Slick-Pay <contact@slick-pay.com>
 */
class Core
{
    /**
     * Calculate commission.
     *
     * @param  string $url  API URL
     * @param  array $params  Request params
     * @return array
     */
    public static function commission(string $url, array $amount): array
    {
        $public_key = config('slickpay.public_key', null);

        $error = Core::validate();

        if (!empty($error)) return $error;

        try {
            $cURL = curl_init();

            curl_setopt($cURL, CURLOPT_URL, Core::url($url));
            curl_setopt($cURL, CURLOPT_POSTFIELDS, $amount);
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                "Accept: application/json",
                "Authorization: Bearer {$public_key}",
            ));
            curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($cURL, CURLOPT_TIMEOUT, 20);

            $response = curl_exec($cURL);
            $status = curl_getinfo($cURL, CURLINFO_HTTP_CODE);
            $errors = curl_error($cURL);

            curl_close($cURL);

        } catch (\Exception $e) {

            return [
                'status' => $status,
                'data'   => null,
                'errors' => [
                    $e->getMessage()
                ],
            ];
        }

        return Core::response($status, $response, $errors);
    }

    /**
     * Store a new resource in storage.
     *
     * @param  string $url  API URL
     * @param  array $data  The new resource data
     * @return array
     */
    public static function store(string $url, array $data): array
    {
        $public_key = config('slickpay.public_key', null);

        $error = self::validate();

        if (!empty($error)) return $error;

        try {

            $cURL = curl_init();

            curl_setopt($cURL, CURLOPT_URL, self::url($url));
            curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                "Accept: application/json",
                "Authorization: Bearer {$public_key}",
            ));
            curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($cURL, CURLOPT_TIMEOUT, 20);

            $response = curl_exec($cURL);
            $status = curl_getinfo($cURL, CURLINFO_HTTP_CODE);
            $errors = curl_error($cURL);

            curl_close($cURL);

        } catch (\Exception $e) {

            return [
                'status' => $status,
                'data'   => null,
                'errors' => [
                    $e->getMessage()
                ],
            ];
        }

        return self::response($status, $response, $errors);
    }

    /**
     * Get the specified resource data.
     *
     * @param  string $url  API URL
     * @param  integer $id  The specified resource id
     * @return array
     */
    public static function show(string $url, int $id): array
    {
        $public_key = config('slickpay.public_key', null);

        $error = self::validate();

        if (!empty($error)) return $error;

        try {

            $cURL = curl_init();

            curl_setopt($cURL, CURLOPT_URL, self::url("{$url}/{$id}"));
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                "Accept: application/json",
                "Authorization: Bearer {$public_key}",
            ));
            curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($cURL, CURLOPT_TIMEOUT, 20);

            $response = curl_exec($cURL);
            $status = curl_getinfo($cURL, CURLINFO_HTTP_CODE);
            $errors = curl_error($cURL);

            curl_close($cURL);

        } catch (\Exception $e) {

            return [
                'status' => $status,
                'data'   => null,
                'errors' => [
                    $e->getMessage()
                ],
            ];
        }

        return self::response($status, $response, $errors);
    }

    /**
     * Get a listing of the resource.
     *
     * @param  string $url  API URL
     * @param  integer  $offset  Pagination offset
     * @param  integer  $page  Pagination page to display
     * @return array
     */
    public static function index(string $url, int $offset = 0, int $page = 1): array
    {
        $public_key = config('slickpay.public_key', null);

        $error = self::validate();

        if (!empty($error)) return $error;

        try {

            $cURL = curl_init();

            $url = "{$url}?fake=1";

            if (!empty($offset)) $url .= "&offset={$offset}";
            if (!empty($offset) && !empty($page)) $url .= "&page={$page}";

            curl_setopt($cURL, CURLOPT_URL, self::url($url));
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                "Accept: application/json",
                "Authorization: Bearer {$public_key}",
            ));
            curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($cURL, CURLOPT_TIMEOUT, 20);

            $response = curl_exec($cURL);
            $status = curl_getinfo($cURL, CURLINFO_HTTP_CODE);
            $errors = curl_error($cURL);

            curl_close($cURL);

        } catch (\Exception $e) {

            return [
                'status' => $status,
                'data'   => null,
                'errors' => [
                    $e->getMessage()
                ],
            ];
        }

        return self::response($status, $response, $errors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string $url  API URL
     * @param  integer $id  The specified resource id
     * @param  array $data  The specified resource data
     * @return array
     */
    public static function update(string $url, int $id, array $data): array
    {
        $public_key = config('slickpay.public_key', null);

        $error = self::validate();

        if (!empty($error)) return $error;

        try {

            $cURL = curl_init();

            curl_setopt($cURL, CURLOPT_URL, self::url("{$url}/{$id}"));
            curl_setopt($cURL, CURLOPT_POSTFIELDS, $data);
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                "Accept: application/json",
                "Authorization: Bearer {$public_key}",
            ));
            curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($cURL, CURLOPT_TIMEOUT, 20);

            $response = curl_exec($cURL);
            $status = curl_getinfo($cURL, CURLINFO_HTTP_CODE);
            $errors = curl_error($cURL);

            curl_close($cURL);

        } catch (\Exception $e) {

            return [
                'status' => $status,
                'data'   => null,
                'errors' => [
                    $e->getMessage()
                ],
            ];
        }

        return self::response($status, $response, $errors);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $url  API URL
     * @param  integer $id  The specified resource id
     * @return array
     */
    public static function destroy(string $url, int $id): array
    {
        $public_key = config('slickpay.public_key', null);

        $error = self::validate();

        if (!empty($error)) return $error;

        try {

            $cURL = curl_init();

            curl_setopt($cURL, CURLOPT_URL, self::url("{$url}/{$id}"));
            curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
                "Accept: application/json",
                "Authorization: Bearer {$public_key}",
            ));
            curl_setopt($cURL, CURLOPT_CUSTOMREQUEST, 'DELETE');
            curl_setopt($cURL, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT, 3);
            curl_setopt($cURL, CURLOPT_TIMEOUT, 20);

            $response = curl_exec($cURL);
            $status = curl_getinfo($cURL, CURLINFO_HTTP_CODE);
            $errors = curl_error($cURL);

            curl_close($cURL);

        } catch (\Exception $e) {

            return [
                'status' => $status,
                'data'   => null,
                'errors' => [
                    $e->getMessage()
                ],
            ];
        }

        return self::response($status, $response, $errors);
    }

    /**
     * Build dynamically API url
     *
     * @param  string  $url  Url to api serice
     * @return string
     */
    public static function url(string $url): string
    {
        $domain_name = config('transfer.sandbox', true)
            ? "devapi.slick-pay.com"
            : "prodapi.slick-pay.com";

        return "https://{$domain_name}/api/v2/{$url}";
    }

    /**
     * Package config file validation
     *
     * @return array|null
     */
    public static function validate(): array|null
    {
        $public_key = config('slickpay.public_key', null);

        if (empty(trim($public_key))) return [
            'status' => 402,
            'data'   => null,
            'errors' => [
                __("No Public Key Has Been Specified.")
            ],
        ];

        return null;
    }

    /**
     * Format response
     *
     * @param  int  $status  Slickpay API response status
     * @param  string  $data  Json encoded Slickpay API response data
     * @param  string  $error  Last error for the current cURL session
     * @return array
     */
    public static function response(int $status, string $data, string $error): array
    {
        $failed = false;
        $json = json_decode($data, true);

        if (!empty($json['errors'])) $failed = true;
        if (in_array($status, [401, 500])) $failed = true;

        $response = [
            'data'   => !$failed ? $json : null,
            'status' => $status,
            'errors' => $failed ? (!empty($json['errors']) ? $json['errors'] : (!empty($json['message']) ? ['server' => [$json['message']]] : ['server' => [$error]])) : null,
        ];

        if (!$failed && !empty($response['data'])) $response = array_merge($response, $response['data']);
        if (!$failed && isset($response['data']['data'])) unset($response['data']['data']);

        return $response;
    }
}
