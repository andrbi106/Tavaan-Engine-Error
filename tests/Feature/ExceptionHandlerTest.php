<?php

declare(strict_types=1);

namespace Tavaan\Engine\Error\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Error\ExceptionHandler;
use Tavaan\Engine\Error\ExceptionHandlerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور ExceptionHandler.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class ExceptionHandlerTest extends TestCase
{
    private ExceptionHandler $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new ExceptionHandler($config);
    }

    public function testEngineInstantiates(): void
    {
        $this->assertInstanceOf(ExceptionHandler::class, $this->engine);
    }

}