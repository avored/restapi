<?php

namespace AvoRed\RestApi\Tests\Integration;

use AvoRed\RestApi\Tests\TestCase;

abstract class IntegrationTestCase extends TestCase
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../../vendor/avored/framework/database/migrations');
        
        // and other test setup steps you need to perform
    }
}