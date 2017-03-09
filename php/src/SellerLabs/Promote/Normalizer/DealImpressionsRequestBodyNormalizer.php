<?php

namespace SellerLabs\Promote\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class DealImpressionsRequestBodyNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'SellerLabs\\Promote\\Model\\DealImpressionsRequestBody') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \SellerLabs\Promote\Model\DealImpressionsRequestBody) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \SellerLabs\Promote\Model\DealImpressionsRequestBody();
        if (property_exists($data, 'impressions')) {
            $values = array();
            foreach ($data->{'impressions'} as $value) {
                $values[] = $value;
            }
            $object->setImpressions($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getImpressions()) {
            $values = array();
            foreach ($object->getImpressions() as $value) {
                $values[] = $value;
            }
            $data->{'impressions'} = $values;
        }
        return $data;
    }
}