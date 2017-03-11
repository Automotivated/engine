<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Object
 *
 * @ORM\Table(name="automotive_object")
 * @ORM\HasLifecycleCallbacks()
 */
class Object
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $label;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="text")
	 */
	protected $serialNumber;

	/**
	 * @var Make
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var Model
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Model")
	 * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
	 */
	protected $model;

	/**
	 * @var TrimLevel
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TrimLevel")
	 * @ORM\JoinColumn(name="trim_level_id", referencedColumnName="id")
	 */
	protected $trimLevel;

	/**
	 * @var Engine
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Engine")
	 * @ORM\JoinColumn(name="engine_id", referencedColumnName="id")
	 */
	protected $engine;

	/**
	 * @var Color
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Color")
	 * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
	 */
	protected $color;

	/**
	 * @var Emission
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Emission")
	 * @ORM\JoinColumn(name="emission_id", referencedColumnName="id")
	 */
	protected $emission;

	/**
	 * @var ObjectStatus
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ObjectStatus")
	 * @ORM\JoinColumn(name="object_status_id", referencedColumnName="id")
	 */
	protected $objectStatus;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(type="datetime")
	 */
	protected $registration;

	/**
	 * @var \DateTime
	 * @ORM\Column(type="datetime")
	 */
	protected $dateOfProduction;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $weight;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $emptyWeight;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $maxWeight;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="smallint", options={"unsigned"=true})
	 */
	protected $doors;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="smallint", options={"unsigned"=true})
	 */
	protected $maxPassengers;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="smallint", options={"unsigned"=true})
	 */
	protected $seats;

	/**
	 * @var bool
	 *
	 * @ORM\Column(type="boolean")
	 */
	protected $towBar;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $trailerWeight;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $towingCapacity;

	/**
	 * @var bool
	 *
	 * @ORM\Column(type="boolean")
	 */
	protected $damaged;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $fuelCapacity;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $averageConsumption;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $cityConsumption;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $highwayConsumption;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $co2Emission;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $energyLabel;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $catalogPriceExVat;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $importTaxExVat;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $bpm;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="integer")
	 */
	protected $vat;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $price;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $salePrice;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $tradingPrice;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $exportPrice;

	/**
	 * @var float
	 *
	 * @ORM\Column(type="float")
	 */
	protected $takeoutPrice;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $stockNumber;

	/**
	 * kenteken
	 * @var string
	 *
	 * @ORM\Column(type="string")
	 */
	protected $identificationNumber;

	/**
	 * @var int
	 *
	 * @ORM\Column(type="integer")
	 */
	protected $mileage;

	/**
	 * @var string
	 *
	 * @ORM\Column(type="text")
	 */
	protected $rawData;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(type="datetime")
	 */
	protected $created;

	/**
	 * @var \DateTime
	 * @ORM\Column(type="datetime")
	 */
	protected $modified;

	/**
	 * @ORM\PrePersist()
	 */
	public function prePersist()
	{
		if ($this->id === null) {
			$this->created = new \DateTime();
		}

		$this->modified = new \DateTime();
	}
}
