<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Factory;

use UnderDevCrew\Bundle\PlacesApiBundle\Model\PlacesModel;

class PlacesModelFactory
{
    /**
     * @param array $dataFromApi
     * @return PlacesModel
     */
    public function create(array $dataFromApi)
    {
        $model = new PlacesModel();

        $result = $dataFromApi['result'];

        $model->fullAddress = $result['formatted_address'];
        $model->latitude = $result['geometry']['location']['lat'];
        $model->longitude = $result['geometry']['location']['lng'];
        $model->mapsUrl = $result['url'];
        $model->url = $result['website'];
        $model->note = $result['rating'];
        $model->shortAddress = $result['vicinity'];
        $model->phoneNumber = $result['international_phone_number'];

        return $model;
    }
}
