<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error\Contracts;

/**
 * قرارداد ExceptionHandler.
 *
 * @see \Tavaan\Engine\Error\ExceptionHandler
 * @api 1.0
 */
interface ExceptionHandlerInterface
{
    /**
     * متد report.
     *
     * @return mixed
     */
    public function report(/* ... */): mixed;

    /**
     * متد render.
     *
     * @return mixed
     */
    public function render(/* ... */): mixed;

    /**
     * متد map.
     *
     * @return mixed
     */
    public function map(/* ... */): mixed;

    /**
     * متد renderable.
     *
     * @return mixed
     */
    public function renderable(/* ... */): mixed;

    /**
     * متد reportable.
     *
     * @return mixed
     */
    public function reportable(/* ... */): mixed;

    /**
     * متد dontReport.
     *
     * @return mixed
     */
    public function dontReport(/* ... */): mixed;

    /**
     * متد level.
     *
     * @return mixed
     */
    public function level(/* ... */): mixed;

    /**
     * متد context.
     *
     * @return mixed
     */
    public function context(/* ... */): mixed;
}