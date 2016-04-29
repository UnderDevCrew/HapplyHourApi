<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Factory;

use UnderDevCrew\Bundle\Model\PlacesModel;

class PlacesModelFactory
{
    /**
     * @param array $dataFromApi
     * @return PlacesModel
     */
    public function create(array $dataFromApi)
    {
        $result = $dataFromApi['result'];
        return (new PlacesModel())
            ->setFullAddress($result['formatted_address'])
            ->setLatitude($result['geometry']['location']['lat'])
            ->setLongitude($result['geometry']['location']['lng'])
            ->setMapsUrl($result['url'])
            ->setUrl($result['website'])
            ->setNote($result['rating'])
            ->setShortAddress($result['vicinity'])
            ->setPhoneNumber($result['international_phone_number'])
        ;
    }
}
