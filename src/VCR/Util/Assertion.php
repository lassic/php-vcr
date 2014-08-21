<?php
namespace VCR\Util;

use VCR\VCRException;

class Assertion
{
    protected static $exceptionClass = 'VCR\VCRException';

    const INVALID_CALLABLE = 910;

    public function __call($name, $arguments)
    {
        // todo: log?
    }

    /**
     * Assert that the value is callable.
     *
     * @param  mixed  $value Variable to check for a callable.
     * @param  string $message Exception message to show if value is not a callable.
     * @param  null   $propertyPath
     * @throws \VCR\VCRException If specified value is not a callable.
     *
     * @return void
     */
    public static function isCallable($value, $message = null, $propertyPath = null)
    {
        if ( ! is_callable($value)) {
            throw new VCRException($message, self::INVALID_CALLABLE, $propertyPath);
        }
    }
}
