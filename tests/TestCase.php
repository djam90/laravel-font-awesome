<?php

namespace Djam90\LaravelFontAwesome\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return ['Djam90\LaravelFontAwesome\LaravelFontAwesomeServiceProvider'];
    }
}