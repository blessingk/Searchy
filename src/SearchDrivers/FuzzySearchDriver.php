<?php

namespace BlessingK\Searchy\SearchDrivers;

use BlessingK\Searchy\Matchers\AcronymMatcher;
use BlessingK\Searchy\Matchers\ConsecutiveCharactersMatcher;
use BlessingK\Searchy\Matchers\ExactMatcher;
use BlessingK\Searchy\Matchers\InStringMatcher;
use BlessingK\Searchy\Matchers\StartOfStringMatcher;
use BlessingK\Searchy\Matchers\StartOfWordsMatcher;
use BlessingK\Searchy\Matchers\StudlyCaseMatcher;
use BlessingK\Searchy\Matchers\TimesInStringMatcher;

class FuzzySearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        ExactMatcher::class                 => 100,
        StartOfStringMatcher::class         => 50,
        AcronymMatcher::class               => 42,
        ConsecutiveCharactersMatcher::class => 40,
        StartOfWordsMatcher::class          => 35,
        StudlyCaseMatcher::class            => 32,
        InStringMatcher::class              => 30,
        TimesInStringMatcher::class         => 8,
];
}
