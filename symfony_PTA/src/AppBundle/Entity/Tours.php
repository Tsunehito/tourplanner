<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tours
 *
 * @ORM\Table(name="tours")
 * @ORM\Entity
 */
class Tours
{
    /**
     * @var string
     *
     * @ORM\Column(name="idTour", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtour;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tour", type="string", length=45, nullable=true)
     */
    private $nomTour;



    /**
     * Get idtour
     *
     * @return string
     */
    public function getIdtour()
    {
        return $this->idtour;
    }

    /**
     * Set nomTour
     *
     * @param string $nomTour
     *
     * @return Tours
     */
    public function setNomTour($nomTour)
    {
        $this->nomTour = $nomTour;

        return $this;
    }

    /**
     * Get nomTour
     *
     * @return string
     */
    public function getNomTour()
    {
        return $this->nomTour;
    }
}
