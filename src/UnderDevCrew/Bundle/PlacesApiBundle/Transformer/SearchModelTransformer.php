<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Transformer;

use Nekland\BaseApi\Transformer\TransformerInterface;
use UnderDevCrew\Bundle\PlacesApiBundle\Factory\SearchModelFactory;

class SearchModelTransformer extends AbstractModelTransformer
{
    public function transform($rawData, $type = self::UNKNOWN)
    {
        $arrayData = json_decode($rawData, true);
        return $this->modelFactory->create($arrayData);
    }
}