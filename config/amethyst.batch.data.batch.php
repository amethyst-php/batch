<?php

return [
    'table'      => 'amethyst_batches',
    'comment'    => 'Batch',
    'model'      => Amethyst\Models\Batch::class,
    'schema'     => Amethyst\Schemas\BatchSchema::class,
    'repository' => Amethyst\Repositories\BatchRepository::class,
    'serializer' => Amethyst\Serializers\BatchSerializer::class,
    'validator'  => Amethyst\Validators\BatchValidator::class,
    'authorizer' => Amethyst\Authorizers\BatchAuthorizer::class,
    'faker'      => Amethyst\Fakers\BatchFaker::class,
    'manager'    => Amethyst\Managers\BatchManager::class,
];
