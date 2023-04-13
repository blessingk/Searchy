<?php

namespace BlessingK\Searchy\SearchDrivers;

use BlessingK\Searchy\Matchers\LevenshteinMatcher;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        LevenshteinMatcher::class           => 100,
    ];
}
