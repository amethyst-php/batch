<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\BatchFaker;
use Amethyst\Managers\BatchManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class BatchTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = BatchManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = BatchFaker::class;
}
