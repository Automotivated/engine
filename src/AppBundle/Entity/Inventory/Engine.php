<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Engine
 *
 * @ORM\Table(name="automotive_engine")
 * @ORM\HasLifecycleCallbacks()
 */
class Engine
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
	 * @var EngineType
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\EngineType")
	 * @ORM\JoinColumn(name="engine_type_id", referencedColumnName="id")
	 */
	protected $engineType;

	/**
	 * @var Fuel
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Fuel")
	 * @ORM\JoinColumn(name="fuel_id", referencedColumnName="id")
	 */
	protected $fuel;

	/**
	 * @var Transmission
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Transmission")
	 * @ORM\JoinColumn(name="transmission_id", referencedColumnName="id")
	 */
	protected $transmission;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="smallint", options={"unsigned"=true})
	 */
	protected $numberOfCylinders;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $sizeLitres;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="smallint", options={"unsigned"=true})
	 */
	protected $horsepower;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="smallint", options={"unsigned"=true})
	 */
	protected $torque;

	/**
	 * @var bool
	 *
	 * @ORM\Column(type="boolean", name="forced_induction")
	 */
	protected $forcedInduction;

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
     * @return EngineType
     */
    public function getEngineType()
    {
        return $this->engineType;
    }

    /**
     * @return Fuel
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @return Transmission
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @return int
     */
    public function getNumberOfCylinders()
    {
        return $this->numberOfCylinders;
    }

    /**
     * @return float
     */
    public function getSizeLitres()
    {
        return $this->sizeLitres;
    }

    /**
     * @return int
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * @return int
     */
    public function getTorque()
    {
        return $this->torque;
    }

    /**
     * @return bool
     */
    public function isForcedInduction()
    {
        return $this->forcedInduction;
    }

}
