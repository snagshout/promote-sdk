<?php

namespace SellerLabs\Promote\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class VersionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'SellerLabs\\Promote\\Model\\Version') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \SellerLabs\Promote\Model\Version) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \SellerLabs\Promote\Model\Version();
        if (property_exists($data, 'api')) {
            $object->setApi($data->{'api'});
        }
        if (property_exists($data, 'app')) {
            $object->setApp($data->{'app'});
        }
        if (property_exists($data, 'php')) {
            $object->setPhp($data->{'php'});
        }
        if (property_exists($data, 'extensions')) {
            $object->setExtensions($data->{'extensions'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getApi()) {
            $data->{'api'} = $object->getApi();
        }
        if (null !== $object->getApp()) {
            $data->{'app'} = $object->getApp();
        }
        if (null !== $object->getPhp()) {
            $data->{'php'} = $object->getPhp();
        }
        if (null !== $object->getExtensions()) {
            $data->{'extensions'} = $object->getExtensions();
        }
        return $data;
    }
}