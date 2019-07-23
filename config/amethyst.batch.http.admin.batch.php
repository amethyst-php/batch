<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\BatchesController::class,
    'router'     => [
        'as'     => 'batch.',
        'prefix' => '/batches',
    ],
];
