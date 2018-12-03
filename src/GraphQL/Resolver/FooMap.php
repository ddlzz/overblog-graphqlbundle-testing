<?php

namespace App\GraphQL\Resolver;

use Overblog\GraphQLBundle\Resolver\ResolverMap;

class FooMap extends ResolverMap
{
    protected function map(): array
    {
        return [
            'RootQuery' => [
                'foo' => function () {
                    return [
                        'fooField' => 'fooText',
                    ];
                },
            ],
        ];
    }
}