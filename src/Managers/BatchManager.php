<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

class BatchManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.batch.data.batch';

    public function removeOlder(string $namespace, int $number): void
    {
    	$this->getOlder($namespace, $number)->delete();
    }
}
