<?php

namespace BlessingK\Tests\Searchy;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use BlessingK\Searchy\SearchyServiceProvider;

/**
 * This is the abstract test case class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return SearchyServiceProvider::class;
    }
}
