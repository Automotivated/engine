<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Object
 *
 * @ORM\Table(name="inventory_object")
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var Model
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Model")
	 * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
	 */
	protected $model;

	/**
	 * @var TrimLevel
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\TrimLevel")
	 * @ORM\JoinColumn(name="trim_level_id", referencedColumnName="id")
	 */
	protected $trimLevel;

	/**
	 * @var Engine
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Engine")
	 * @ORM\JoinColumn(name="engine_id", referencedColumnName="id")
	 */
	protected $engine;

	/**
	 * @var Color
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Color")
	 * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
	 */
	protected $color;

	/**
	 * @var Emission
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Emission")
	 * @ORM\JoinColumn(name="emission_id", referencedColumnName="id")
	 */
	protected $emission;

	/**
	 * @var ObjectStatus
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\ObjectStatus")
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @return Make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return TrimLevel
     */
    public function getTrimLevel()
    {
        return $this->trimLevel;
    }

    /**
     * @return Engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return Emission
     */
    public function getEmission()
    {
        return $this->emission;
    }

    /**
     * @return ObjectStatus
     */
    public function getObjectStatus()
    {
        return $this->objectStatus;
    }

    /**
     * @return \DateTime
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfProduction()
    {
        return $this->dateOfProduction;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getEmptyWeight()
    {
        return $this->emptyWeight;
    }

    /**
     * @return float
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * @return int
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @return int
     */
    public function getMaxPassengers()
    {
        return $this->maxPassengers;
    }

    /**
     * @return int
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @return bool
     */
    public function isTowBar()
    {
        return $this->towBar;
    }

    /**
     * @return float
     */
    public function getTrailerWeight()
    {
        return $this->trailerWeight;
    }

    /**
     * @return float
     */
    public function getTowingCapacity()
    {
        return $this->towingCapacity;
    }

    /**
     * @return bool
     */
    public function isDamaged()
    {
        return $this->damaged;
    }

    /**
     * @return float
     */
    public function getFuelCapacity()
    {
        return $this->fuelCapacity;
    }

    /**
     * @return float
     */
    public function getAverageConsumption()
    {
        return $this->averageConsumption;
    }

    /**
     * @return float
     */
    public function getCityConsumption()
    {
        return $this->cityConsumption;
    }

    /**
     * @return float
     */
    public function getHighwayConsumption()
    {
        return $this->highwayConsumption;
    }

    /**
     * @return float
     */
    public function getCo2Emission()
    {
        return $this->co2Emission;
    }

    /**
     * @return string
     */
    public function getEnergyLabel()
    {
        return $this->energyLabel;
    }

    /**
     * @return float
     */
    public function getCatalogPriceExVat()
    {
        return $this->catalogPriceExVat;
    }

    /**
     * @return float
     */
    public function getImportTaxExVat()
    {
        return $this->importTaxExVat;
    }

    /**
     * @return float
     */
    public function getBpm()
    {
        return $this->bpm;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @return float
     */
    public function getTradingPrice()
    {
        return $this->tradingPrice;
    }

    /**
     * @return float
     */
    public function getExportPrice()
    {
        return $this->exportPrice;
    }

    /**
     * @return float
     */
    public function getTakeoutPrice()
    {
        return $this->takeoutPrice;
    }

    /**
     * @return string
     */
    public function getStockNumber()
    {
        return $this->stockNumber;
    }

    /**
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->identificationNumber;
    }

    /**
     * @return int
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @return string
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

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
