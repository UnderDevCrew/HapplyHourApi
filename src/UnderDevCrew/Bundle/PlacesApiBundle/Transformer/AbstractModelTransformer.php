<?php

namespace UnderDevCrew\Bundle\PlacesApiBundle\Transformer;


use Nekland\BaseApi\Transformer\TransformerInterface;
use UnderDevCrew\Bundle\PlacesApiBundle\Factory\ModelFactoryInterface;

abstract class AbstractModelTransformer implements TransformerInterface
{
    /**
     * @var ModelFactoryInterface
     */
    protected $modelFactory;

    /**
     * @param ModelFactoryInterface $modelFactory
     */
    public function __construct(ModelFactoryInterface $modelFactory)
    {
        $this->modelFactory = $modelFactory;
    }

}