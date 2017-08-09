<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Tests\Payment;

use EasyWeChat\Payment\Application;
use EasyWeChat\Tests\TestCase;
use EasyWeChat\Payment\Client;

class ApplicationTest extends TestCase
{
    public function testMagicCall()
    {
        $app = new Application();

        $this->assertInstanceOf(Client::class, $app->sandboxMode(true));

        // test calling nonexistent method
        $this->expectException(\PHPUnit\Framework\Error\Warning::class);
        $app->noncexistentMethod('foo');
    }
}
