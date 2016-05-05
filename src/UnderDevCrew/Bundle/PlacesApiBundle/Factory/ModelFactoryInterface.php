<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Factory;


interface ModelFactoryInterface
{
    /**
     * @param array $dataFromApi
     * @return mixed
     */
    public function create(array $dataFromApi);
}
