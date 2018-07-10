<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Joli\Jane\Runtime\Normalizer\ArrayDenormalizer();
        $normalizers[] = new DealImpressionsRequestBodyNormalizer();
        $normalizers[] = new CancelRebateRequestBodyNormalizer();
        $normalizers[] = new ConfirmRebateRequestBodyNormalizer();
        $normalizers[] = new CreateOrderRequestBodyNormalizer();
        $normalizers[] = new FlagDealRequestBodyNormalizer();
        $normalizers[] = new NotifyDealRequestBodyNormalizer();
        $normalizers[] = new ReviewFoundRequestBodyNormalizer();
        $normalizers[] = new SyncDealRequestBodyNormalizer();
        $normalizers[] = new ImpressionNormalizer();
        $normalizers[] = new UnsyncDealRequestBodyNormalizer();
        $normalizers[] = new CategoryNormalizer();
        $normalizers[] = new MediumNormalizer();
        $normalizers[] = new DealNormalizer();
        $normalizers[] = new FollowupNormalizer();
        $normalizers[] = new VersionNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new InitializeMigrationBodyNormalizer();
        $normalizers[] = new PayloadNormalizer();
        $normalizers[] = new CheckEmailRequestBodyNormalizer();

        return $normalizers;
    }
}
