<?php

namespace AppBundle\Entity;

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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var EngineType
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EngineType")
	 * @ORM\JoinColumn(name="engine_type_id", referencedColumnName="id")
	 */
	protected $engineType;

	/**
	 * @var Fuel
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fuel")
	 * @ORM\JoinColumn(name="fuel_id", referencedColumnName="id")
	 */
	protected $fuel;

	/**
	 * @var Transmission
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Transmission")
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
}
