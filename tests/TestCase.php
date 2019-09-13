<?php

namespace AvoRed\RestApi\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use AvoRed\RestApi\AvoRedRestApiProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [AvoRedRestApiProvider::class];
    }
}