<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class BarController extends Controller
{
    /**
     * @Route("/bars", name="app_bars_all")
     * @param Request $request
     * @return JsonResponse
     */
    public function searchBarsAction(Request $request)
    {
        $latitude = $request->query->get('latitude');
        $longitude = $request->query->get('longitude');

        if (empty($latitude) || empty($longitude)) {
            throw new BadRequestHttpException('Missing longitude or latitude');
        }
        $places = $this->get('underdevcrew.places_api.search')->searchLocation(
            $latitude . ',' . $longitude,
            1000
        );

        return new JsonResponse($places);
    }

    /**
     * @Route("/bars/{id}", name="app_bars_one")
     * @param int $id
     * @return JsonResponse
     */
    public function getOneBarAction($id)
    {
        $place = $this->get('underdevcrew.places_api.places')->getPlaceById($id);

        return new JsonResponse($place);
    }
}
