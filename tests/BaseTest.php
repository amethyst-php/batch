<?php

namespace Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        app('amethyst')->pushMorphRelation('batch', 'target', 'foo');

        $this->artisan('migrate:fresh');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Amethyst\Providers\BatchServiceProvider::class,
            \Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
