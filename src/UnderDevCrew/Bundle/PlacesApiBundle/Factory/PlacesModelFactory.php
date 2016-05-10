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

        $this->propertyAccessor->setValue($model, 'name', isset($dataFromApi['name']) ? $dataFromApi['name'] : null);
        $this->propertyAccessor->setValue($model, 'fullAddress', isset($dataFromApi['formatted_address']) ? $dataFromApi['formatted_address'] : null);
        $this->propertyAccessor->setValue($model, 'latitude', isset($dataFromApi['geometry']['location']['lat']) ? $dataFromApi['geometry']['location']['lat'] : null);
        $this->propertyAccessor->setValue($model, 'longitude', isset($dataFromApi['geometry']['location']['lng']) ? $dataFromApi['geometry']['location']['lng'] : null);
        $this->propertyAccessor->setValue($model, 'shortAddress', isset($dataFromApi['vicinity']) ? $dataFromApi['vicinity'] : null);
        $this->propertyAccessor->setValue($model, 'mapsUrl', isset($dataFromApi['url']) ? $dataFromApi['url'] : null);
        $this->propertyAccessor->setValue($model, 'url', isset($dataFromApi['website']) ? $dataFromApi['website'] : null);
        $this->propertyAccessor->setValue($model, 'note', isset($dataFromApi['rating']) ? $dataFromApi['rating'] : null);
        $this->propertyAccessor->setValue($model, 'phoneNumber', isset($dataFromApi['international_phone_number']) ? $dataFromApi['international_phone_number'] : null);

        return $model;
    }
}
