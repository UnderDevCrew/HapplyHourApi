<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Transformer;

class PlacesModelTransformer extends AbstractModelTransformer
{
    public function transform($rawData, $type = self::UNKNOWN)
    {
        $arrayData = json_decode($rawData, true);
        return $this->modelFactory->create($arrayData['result']);
    }
}
