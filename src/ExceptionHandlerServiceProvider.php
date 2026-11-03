<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Error\Contracts\ExceptionHandlerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ExceptionHandlerServiceProvider — ثبت سرویس‌های موتور ExceptionHandler.
 */
final class ExceptionHandlerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ExceptionHandlerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new ExceptionHandler($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Error\Console\Error_simulateCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ExceptionHandlerInterface::class,
        ];
    }
}