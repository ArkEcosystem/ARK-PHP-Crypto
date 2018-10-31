<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Crypto.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\Tests\Crypto\Transactions\Serializers;

use ArkEcosystem\Tests\Crypto\TestCase;
use ArkEcosystem\Crypto\Transactions\Serializer;

/**
 * This is the delegate resignation serializer test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @covers \ArkEcosystem\Crypto\Transactions\Serializers\DelegateResignation
 */
class DelegateResignationTest extends TestCase
{
    /** @test */
    public function it_should_serialize_the_transaction_with_a_passphrase()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');

        $this->assertSerialized($this->getTransactionFixture('delegate_resignation', 'passphrase'));
    }

    /** @test */
    public function it_should_serialize_the_transaction_with_a_second_passphrase()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');

        $this->assertSerialized($this->getTransactionFixture('delegate_resignation', 'second-passphrase'));
    }
}
