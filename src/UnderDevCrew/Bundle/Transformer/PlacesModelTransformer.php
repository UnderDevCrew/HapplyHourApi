<?php

namespace UnderDevCrew\Bundle\Transformer;

use Nekland\BaseApi\Transformer\TransformerInterface;
use UnderDevCrew\Bundle\PlacesApiBundle\Factory\PlacesModelFactory;

class PlacesModelTransformer implements TransformerInterface
{
    /**
     * @var PlacesModelFactory
     */
    private $modelFactory;

    /**
     * @param PlacesModelFactory $placesModelFactory
     */
    public function __construct(PlacesModelFactory $placesModelFactory)
    {
        $this->modelFactory = $placesModelFactory;
    }


    public function transform($data, $type = self::UNKNOWN)
    {
        $jsonData = json_decode($data, true);
        return $this->modelFactory->create($jsonData);
    }
}
