<?php


namespace Imper86\PhpBaselinkerApi\Enum;


use MyCLabs\Enum\Enum;

/**
 * Class ImageType
 * @package Imper86\PhpBaselinkerApi\Enum
 * @extends Enum<ImageType>
 *
 * @method static ImageType URL()
 * @method static ImageType DATA()
 */
final class ImageType extends Enum
{
    public const URL = 'url';
    public const DATA = 'data';
}
