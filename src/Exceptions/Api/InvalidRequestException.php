<?php
/**
 * This file is part of the WrikePhpSdk package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpSdk\Exceptions\Api;

/**
 * Invalid Request Exception
 *
 * Thrown when the Wrike API returns a 400 error code and "invalid_request" error value.
 * Request HTTP type is invalid, request critical data is absent or malformed (e.g., no attachment body).
 */
class InvalidRequestException extends ApiException
{
    const STATUS_CODE = 400;
    const STATUS_NAME = 'invalid_request';
}