<?php

namespace TomLingham\Searchy\SearchDrivers;

use BlessingK\Searchy\Matchers\ExactMatcher;
use BlessingK\Searchy\Matchers\InStringMatcher;
use BlessingK\Searchy\Matchers\StartOfStringMatcher;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        ExactMatcher::class                 => 100,
        StartOfStringMatcher::class         => 50,
        InStringMatcher::class              => 30,
    ];
}
