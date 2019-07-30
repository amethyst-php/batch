<?php

namespace Amethyst\Repositories;

use Railken\Lem\Repository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class BatchRepository extends Repository
{
    /**
     * Find a new number given namespace
     *
     * @param string $namespace
     *
     * @return int $number
     */
    public function calculateNewNumber(string $namespace): int
    {
        $batch = $this->newQuery()->where('namespace', $namespace)->orderBy('number', 'DESC')->first();

        return $batch ? $batch->number + 1 : 1;
    }  

    /**
     * Get older records
     *
     * @param string $namespace
     * @param int $number
     *
     * @return Builder
     */
    public function getOlder(string $namespace, int $number): Builder
    {
        return $this->newQuery()->where('namespace', $namespace)->where('number', '<', $number);
    }

    /**
     * Retrieve all batches that aren't part of the newest batch
     *
     * @param string $namespace
     * @param int $number
     *
     * @return Collection
     */
    public function getNotUpdated(string $namespace, int $number): Builder
    {
        return $this->newQuery()
            ->where('namespace', $namespace)
            ->where('number', '!=', $number)
            ->whereNotIn('target_id',function($query) use ($namespace, $number) {
                return $query
                    ->select(\Illuminate\Support\Facades\DB::raw('target_id'))
                    ->from($this->newEntity()->getTable())
                    ->where(['namespace' => $namespace, 'number' => $number]);
            });
    }
}
