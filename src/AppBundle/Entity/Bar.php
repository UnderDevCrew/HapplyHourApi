<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bar
 *
 * @ORM\Table(name="bar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BarRepository")
 */
class Bar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="places_id", type="string", length=255)
     */
    private $placesId;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="opinion", type="text")
     */
    private $authorsOpinion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="happyhour_start", type="time")
     */
    private $happyhourStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="happyhour_end", type="time")
     */
    private $happyhourEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Bar
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set placesId
     *
     * @param string $placesId
     *
     * @return Bar
     */
    public function setPlacesId($placesId)
    {
        $this->placesId = $placesId;

        return $this;
    }

    /**
     * Get placesId
     *
     * @return string
     */
    public function getPlacesId()
    {
        return $this->placesId;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Bar
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Bar
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set authorsOpinion
     *
     * @param string $authorsOpinion
     *
     * @return Bar
     */
    public function setAuthorsOpinion($authorsOpinion)
    {
        $this->authorsOpinion = $authorsOpinion;

        return $this;
    }

    /**
     * Get authorsOpinion
     *
     * @return string
     */
    public function getAuthorsOpinion()
    {
        return $this->authorsOpinion;
    }

    /**
     * Set happyhourStart
     *
     * @param \DateTime $happyhourStart
     *
     * @return Bar
     */
    public function setHappyhourStart($happyhourStart)
    {
        $this->happyhourStart = $happyhourStart;

        return $this;
    }

    /**
     * Get happyhourStart
     *
     * @return \DateTime
     */
    public function getHappyhourStart()
    {
        return $this->happyhourStart;
    }

    /**
     * Set happyhourEnd
     *
     * @param \DateTime $happyhourEnd
     *
     * @return Bar
     */
    public function setHappyhourEnd($happyhourEnd)
    {
        $this->happyhourEnd = $happyhourEnd;

        return $this;
    }

    /**
     * Get happyhourEnd
     *
     * @return \DateTime
     */
    public function getHappyhourEnd()
    {
        return $this->happyhourEnd;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Bar
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }
}
