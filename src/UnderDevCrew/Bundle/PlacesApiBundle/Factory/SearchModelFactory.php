<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Factory;

use Symfony\Component\PropertyAccess\PropertyAccessor;
use UnderDevCrew\Bundle\PlacesApiBundle\Model\SearchModel;

class SearchModelFactory implements ModelFactoryInterface
{
    /**
     * @var PropertyAccessor $propertyAccessor
     */
    private $propertyAccessor;

    /**
     * @var PlacesModelFactory $placesModelFactory
     */
    private $placesModelFactory;
    /**
     * @param PropertyAccessor $propertyAccessor
     * @param PlacesModelFactory $placesModelFactory
     */
    public function __construct(PropertyAccessor $propertyAccessor, PlacesModelFactory $placesModelFactory)
    {
        $this->propertyAccessor = $propertyAccessor;
        $this->placesModelFactory = $placesModelFactory;
    }

    /**
     * @param array $data
     * @return SearchModel
     */
    public function create(array $data)
    {
        $model = new SearchModel();
        $places = [];
        foreach ($data['results'] as $place) {
            $places[] = $this->placesModelFactory->create($place);
        }

        $this->propertyAccessor->setValue($model, 'places', $places);

        return $model;
    }
}
