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

namespace ArkEcosystem\Crypto\Serializers;

use BitWasp\Bitcoin\Base58;

/**
 * This is the serializer class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class MultiPayment extends AbstractSerializer
{
    /**
     * Handle the serialisation of "multi payment" data.
     *
     * @return string
     */
    public function serialize(): void
    {
        $this->buffer->writeUInt32(count($this->transaction['asset']['payments']));

        foreach ($this->transaction['asset']['payments'] as $payment) {
            $this->buffer->writeUInt64($payment['amount']);
            $this->buffer->writeHex(Base58::decodeCheck($payment['recipientId'])->getHex());
        }
    }
}
