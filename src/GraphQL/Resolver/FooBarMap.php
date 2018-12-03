<?php

namespace App\GraphQL\Resolver;

use Overblog\GraphQLBundle\Resolver\ResolverMap;

class FooBarMap extends ResolverMap
{
    protected function map(): array
    {
        return [
            'RootQuery' => [
                'fooBar' => function () {
                    return [
                        'fooBarField' => 'fooBarText',
                    ];
                },
            ],
        ];
    }
}