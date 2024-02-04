<?php

namespace Violetshih\TaiwanSmsLaravel\Tests;

use Violetshih\TaiwanSmsLaravel\TaiwanSmsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            TaiwanSmsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
