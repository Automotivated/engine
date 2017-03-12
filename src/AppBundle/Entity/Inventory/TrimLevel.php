<?php

namespace AppBundle\Entity\Inventory;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class TrimLevel
 *
 * @ORM\Table(name="inventory_trim_level")
 * @ORM\HasLifecycleCallbacks()
 */
class TrimLevel
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
	 * @var Model
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory\Model")
	 * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
	 */
	protected $model;

	/**
	 * @var \DateTime
	 * @ORM\Column(type="datetime")
	 */
	protected $dateOfProduction;

	/**
	 * @var Engine
	 *
	 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Inventory\Engine")
	 * @ORM\JoinColumn(name="engine_id", referencedColumnName="id")
	 */
	protected $engine;

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
	 * @var \DateTime
	 * @ORM\Column(type="datetime")
	 */
	protected $modified;

	/**
	 * @var ArrayCollection|Feature[]
	 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Inventory\Feature")
	 */
	protected $features;

	/**
	 * @ORM\PrePersist()
	 */
	public function prePersist()
	{
		$this->modified = new \DateTime();
	}

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
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfProduction()
    {
        return $this->dateOfProduction;
    }

    /**
     * @return Engine
     */
    public function getEngine()
    {
        return $this->engine;
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
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @return Feature[]|ArrayCollection
     */
    public function getFeatures()
    {
        return $this->features;
    }
}
