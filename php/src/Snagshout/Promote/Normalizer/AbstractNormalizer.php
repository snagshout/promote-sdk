<?php

/**
 * Copyright 2016-2023, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Snagshout\Promote\Model\AbstractModel;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

/**
 * AbstractNormalizer class.
 *
 * @author Andrii Prykhodko <andriichello@gmail.com>
 * @package Snagshout\Promote\Normalizer
 */
abstract class AbstractNormalizer implements NormalizerInterface, DenormalizerInterface, SerializerAwareInterface
{
    use SerializerAwareTrait;

    /**
     * @var string|AbstractModel
     */
    protected $modelClass;

    public function supportsNormalization($data, ?string $format = null)
    {
        return $data instanceof $this->modelClass;
    }

    public function supportsDenormalization($data, string $type, ?string $format = null)
    {
        return $type === $this->modelClass;
    }

    abstract public function denormalize($data, string $type, string $format = null, array $context = []);

    abstract public function normalize($object, string $format = null, array $context = []);
}
