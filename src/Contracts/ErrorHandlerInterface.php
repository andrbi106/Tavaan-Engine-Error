<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error\Contracts;

/**
 * قرارداد ErrorHandler.
 *
 * @see \Tavaan\Engine\Error\ErrorHandler
 * @api 1.0
 */
interface ErrorHandlerInterface
{
    /**
     * متد register.
     *
     * @return mixed
     */
    public function register(/* ... */): mixed;

    /**
     * متد unregister.
     *
     * @return mixed
     */
    public function unregister(/* ... */): mixed;

    /**
     * متد handleError.
     *
     * @return mixed
     */
    public function handleError(/* ... */): mixed;

    /**
     * متد handleException.
     *
     * @return mixed
     */
    public function handleException(/* ... */): mixed;

    /**
     * متد handleShutdown.
     *
     * @return mixed
     */
    public function handleShutdown(/* ... */): mixed;
}