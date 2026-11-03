<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ErrorHandler — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Error\Contracts\ErrorHandlerInterface
 */
final class ErrorHandler implements Contracts\ErrorHandlerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function register(/* ... */): mixed
    {
        // TODO: پیاده‌سازی register مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function unregister(/* ... */): mixed
    {
        // TODO: پیاده‌سازی unregister مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function handleError(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handleError مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function handleException(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handleException مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function handleShutdown(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handleShutdown مطابق مستندات (سند §3 API).
        return null;
    }
}