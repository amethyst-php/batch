<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class BatchFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('number', 1);
        $bag->set('namespace', 'faker');
        $bag->set('target_type', 'foo');
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
