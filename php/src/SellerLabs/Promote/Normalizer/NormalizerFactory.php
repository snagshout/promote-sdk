<?php

namespace SellerLabs\Promote\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Joli\Jane\Runtime\Normalizer\ArrayDenormalizer();
        $normalizers[] = new SyncDealRequestBodyNormalizer();
        $normalizers[] = new UnsyncDealRequestBodyNormalizer();
        $normalizers[] = new CategoryNormalizer();
        $normalizers[] = new MediumNormalizer();
        $normalizers[] = new DealNormalizer();
        $normalizers[] = new VersionNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new PayloadNormalizer();
        return $normalizers;
    }
}