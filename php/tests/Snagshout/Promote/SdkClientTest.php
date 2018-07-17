<?php

/**
 * Copyright 2017-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Snagshout package
 */

namespace Tests\Snagshout\Promote;

use Tests\Snagshout\Promote\TestCase;
use Snagshout\Promote\SdkClient;
use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * Class SdkClientTest.
 *
 * @covers \Snagshout\Promote\SdkClient
 * @method SdkClient make()
 *
 * @author Mark Vaughn <mark@snagshout.com>
 * @package Snagshout\Promote
 */
class SdkClientTest extends BaseTestCase
{
    public function testCreate()
    {
        $client = new SdkClient(
            'foo',
            'bar',
            'http://localhost'
        );

        $this->assertInstanceOf(SdkClient::class, $client);
    }
}
