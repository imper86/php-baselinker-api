<?php

namespace Imper86\PhpBaselinkerApi\Enum;

use MyCLabs\Enum\Enum;

/**
 * Class Status
 * @package Imper86\PhpBaselinkerApi\Enum
 * @extends Enum<Status>
 *
 * @method static Status SUCCESS()
 * @method static Status ERROR()
 */
final class Status extends Enum
{
    public const SUCCESS = 'SUCCESS';
    public const ERROR = 'ERROR';
}
