<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Factory;

use Symfony\Component\PropertyAccess\PropertyAccessor;
use UnderDevCrew\Bundle\PlacesApiBundle\Model\PlacesModel;

class PlacesModelFactory implements ModelFactoryInterface
{
    /**
     * @var PropertyAccessor $propertyAccessor
     */
    private $propertyAccessor;

    public function __construct(PropertyAccessor $accessor)
    {
        $this->propertyAccessor = $accessor;
    }

    /**
     * @param array $dataFromApi
     * @return PlacesModel
     */
    public function create(array $dataFromApi)
    {
        $model = new PlacesModel();

        $result = $dataFromApi;

        $this->propertyAccessor->setValue($model, 'name', isset($result['name']) ? $result['name'] : null);
        $this->propertyAccessor->setValue($model, 'fullAddress', isset($result['formatted_address']) ? $result['formatted_address'] : null);
        $this->propertyAccessor->setValue($model, 'latitude', isset($result['geometry']['location']['lat']) ? $result['geometry']['location']['lat'] : null);
        $this->propertyAccessor->setValue($model, 'longitude', isset($result['geometry']['location']['lng']) ? $result['geometry']['location']['lng'] : null);
        $this->propertyAccessor->setValue($model, 'shortAddress', isset($result['vicinity']) ? $result['vicinity'] : null);
        $this->propertyAccessor->setValue($model, 'mapsUrl', isset($result['url']) ? $result['url'] : null);
        $this->propertyAccessor->setValue($model, 'url', isset($result['website']) ? $result['website'] : null);
        $this->propertyAccessor->setValue($model, 'note', isset($result['rating']) ? $result['rating'] : null);
        $this->propertyAccessor->setValue($model, 'phoneNumber', isset($result['international_phone_number']) ? $result['international_phone_number'] : null);

        return $model;
    }
}
