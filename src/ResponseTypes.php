<?php

namespace Ebay\Buy\Browse;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'search' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\SearchPagedCollection',
        ],
        'searchByImage' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\SearchPagedCollection',
        ],
        'getItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
        ],
        'getItemByLegacyId' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
        ],
        'getItems' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Items',
        ],
        'getItemsByItemGroup' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\ItemGroup',
        ],
        'checkCompatibility' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\CompatibilityResponse',
        ],
        'addItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
        ],
        'getShoppingCart' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
        ],
        'removeItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
        ],
        'updateQuantity' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
        ],
    ];
}
