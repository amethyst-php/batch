<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class BatchSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\NumberAttribute::make('number')
                ->setRequired(true),
            Attributes\TextAttribute::make('namespace')
                ->setRequired(true),
            Attributes\EnumAttribute::make('target_type', app('amethyst')->getMorphListable('batch', 'target'))
                ->setRequired(false),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getMorphRelationable('batch', 'target'))
                ->setRequired(false),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
