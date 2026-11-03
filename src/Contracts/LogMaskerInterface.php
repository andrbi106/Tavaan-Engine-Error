<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error\Contracts;

/**
 * قرارداد LogMasker.
 *
 * @see \Tavaan\Engine\Error\LogMasker
 * @api 1.0
 */
interface LogMaskerInterface
{
    /**
     * متد mask.
     *
     * @return mixed
     */
    public function mask(/* ... */): mixed;

    /**
     * متد maskString.
     *
     * @return mixed
     */
    public function maskString(/* ... */): mixed;

    /**
     * متد addKeys.
     *
     * @return mixed
     */
    public function addKeys(/* ... */): mixed;

    /**
     * متد addPatterns.
     *
     * @return mixed
     */
    public function addPatterns(/* ... */): mixed;
}