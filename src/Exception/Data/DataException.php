<?php

declare (strict_types = 1);

namespace Nusantara\Exception\Data;

use Nusantara\Exception\DefaultConstructorTrait;
use Nusantara\Exception\DefaultsInterface;
use Nusantara\Exception\FromException;

/**
 * This is a tag like class that is used to regroup all Data exceptions under a single base class.
 *
 * @author   Mathieu Dumoulin <thecrazycodr@gmail.com>
 * @license  MIT
 */
abstract class DataException extends \RuntimeException implements DataExceptionInterface, DefaultsInterface
{
    use FromException, DefaultConstructorTrait;

    /**
     * {@inheritdoc}
     */
    public static function getDefaultMessage(): string
    {
        return static::MESSAGE;
    }

    /**
     * {@inheritdoc}
     */
    public static function getDefaultCode(): int
    {
        return static::CODE;
    }
}
