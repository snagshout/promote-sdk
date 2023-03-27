<?php

/**
 * Copyright 2016-2023, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Encoder;

use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

/**
 * Class RawEncoder.
 *
 * Encoder with no encoding (keeps the same output as the input)
 *
 * @author Andrii Prykhodko <andriichello@gmail.com>
 * @package Snagshout\Promote\Encoder
 */
class RawEncoder implements DecoderInterface, EncoderInterface
{
    const FORMAT = 'raw';

    /**
     * {@inheritdoc}
     */
    public function decode($data, $format, array $context = array())
    {
        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding($format): bool
    {
        return self::FORMAT === $format;
    }

    /**
     * {@inheritdoc}
     */
    public function encode($data, $format, array $context = array()): string
    {
        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsEncoding($format): bool
    {
        return self::FORMAT === $format;
    }
}
