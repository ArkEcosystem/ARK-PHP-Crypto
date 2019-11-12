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

namespace ArkEcosystem\Crypto\Transactions\Builder;

use ArkEcosystem\Crypto\Transactions\Types\HtlcLock;

class HtlcLockBuilder extends AbstractTransactionBuilder
{
    public function recipient(string $recipientId): self
    {
        $this->transaction->data['recipientId'] = $recipientId;

        return $this;
    }
    
    public function htlcLockAsset(string $secretHash, int $expirationType, int $expirationValue): self
    {
        $this->transaction->data['asset'] = [
            "lock" => [
                "secretHash" => $secretHash,
                "expiration" => [
                    "type" => $expirationType,
                    "value" => $expirationValue
                ]
            ]
        ];

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    protected function getType(): int
    {
        return \ArkEcosystem\Crypto\Enums\Types::HTLC_LOCK;
    }

    protected function getTransactionInstance(): object
    {
        return new HtlcLock();
    }
}