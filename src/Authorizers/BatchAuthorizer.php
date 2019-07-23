<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class BatchAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'batch.create',
        Tokens::PERMISSION_UPDATE => 'batch.update',
        Tokens::PERMISSION_SHOW   => 'batch.show',
        Tokens::PERMISSION_REMOVE => 'batch.remove',
    ];
}
