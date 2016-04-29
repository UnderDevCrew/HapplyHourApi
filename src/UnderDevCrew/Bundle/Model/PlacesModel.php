<?php

namespace UnderDevCrew\Bundle\Model;


class PlacesModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $shortAddress;

    /**
     * @var string
     */
    private $fullAddress;

    /**
     * @var float
     */
    private $note;

    /**
     * @var string
     */
    private $mapsUrl;

    /**
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PlacesModel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return PlacesModel
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return PlacesModel
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return PlacesModel
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortAddress()
    {
        return $this->shortAddress;
    }

    /**
     * @param string $shortAddress
     * @return PlacesModel
     */
    public function setShortAddress($shortAddress)
    {
        $this->shortAddress = $shortAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * @param string $fullAddress
     * @return PlacesModel
     */
    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;

        return $this;
    }

    /**
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param float $note
     * @return PlacesModel
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getMapsUrl()
    {
        return $this->mapsUrl;
    }

    /**
     * @param string $mapsUrl
     * @return PlacesModel
     */
    public function setMapsUrl($mapsUrl)
    {
        $this->mapsUrl = $mapsUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return PlacesModel
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
