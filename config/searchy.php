<?php

return [

    'default' => 'fuzzy',

    'fieldName' => 'relevance',

    'drivers' => [

        'fuzzy' => [
            'class' => 'BlessingK\Searchy\SearchDrivers\FuzzySearchDriver',
        ],

        'ufuzzy' => [
            'class' => 'BlessingK\Searchy\SearchDrivers\FuzzySearchUnicodeDriver',
        ],

        'simple' => [
            'class' => 'BlessingK\Searchy\SearchDrivers\SimpleSearchDriver',
        ],

        'levenshtein' => [
            'class' => 'BlessingK\Searchy\SearchDrivers\LevenshteinSearchDriver',
        ],

    ],

];
