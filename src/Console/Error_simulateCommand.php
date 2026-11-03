<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * error:simulate command.
 */
final class Error_simulateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'error:simulate';
    }

    public function description(): string
    {
        return 'Run error:simulate (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
