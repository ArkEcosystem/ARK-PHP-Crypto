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

namespace ArkEcosystem\Tests\Crypto\Identity;

use ArkEcosystem\Crypto\Identity\PrivateKey as TestClass;
use ArkEcosystem\Crypto\Networks\Devnet;
use ArkEcosystem\Tests\Crypto\TestCase;
use BitWasp\Bitcoin\Crypto\EcAdapter\Impl\PhpEcc\Key\PrivateKey as EcPublicKey;

/**
 * This is the address test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @coversNothing
 */
class PrivateKeyTest extends TestCase
{
    /** @test */
    public function it_should_get_the_private_key_from_secret()
    {
        $actual = TestClass::fromSecret('this is a top secret passphrase', Devnet::create());

        $this->assertInstanceOf(EcPublicKey::class, $actual);
        $this->assertInternalType('string', $actual->getHex());
        $this->assertSame('d8839c2432bfd0a67ef10a804ba991eabba19f154a3d707917681d45822a5712', $actual->getHex());
    }
}