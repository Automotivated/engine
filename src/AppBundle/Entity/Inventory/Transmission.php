<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Transmission
 *
 * @ORM\Table(name="inventory_transmission")
 */
class Transmission
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @var Make
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var TransmissionClassification
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\TransmissionClassification")
	 * @ORM\JoinColumn(name="transmission_classification_id", referencedColumnName="id")
	 */
	protected $transmissionClassification;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="int", options={"unsigned"=true})
	 */
	protected $numberOfForwardGears;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="int", options={"unsigned"=true})
	 */
	protected $numberOfReverseGears;

	/**
	 * @var bool
	 *
	 * @ORM\Column(type="boolean")
	 */
	protected $overdrive;

	/**
	 * @var bool
	 *
	 * @ORM\Column(type="boolean", name="select_shift")
	 */
	protected $selectShift;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @return TransmissionClassification
     */
    public function getTransmissionClassification()
    {
        return $this->transmissionClassification;
    }

    /**
     * @return int
     */
    public function getNumberOfForwardGears()
    {
        return $this->numberOfForwardGears;
    }

    /**
     * @return int
     */
    public function getNumberOfReverseGears()
    {
        return $this->numberOfReverseGears;
    }

    /**
     * @return bool
     */
    public function isOverdrive()
    {
        return $this->overdrive;
    }

    /**
     * @return bool
     */
    public function isSelectShift()
    {
        return $this->selectShift;
    }

}
