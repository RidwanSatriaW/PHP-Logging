<?php

namespace Ridwan\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {

        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("This is log message", ["username" => "ridwan"]);
        $logger->info("Try login user", ["username" => "ridwan"]);
        $logger->info("Success login user", ["username" => "ridwan"]);
        $logger->info("Tidak ada context");

        self::assertNotNull($logger);

    }

}