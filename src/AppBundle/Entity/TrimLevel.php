<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TrimLevel
 *
 * @ORM\Table(name="automotive_trim_level")
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Model")
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Engine")
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
	 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Feature")
	 */
	protected $features;

	/**
	 * @ORM\PrePersist()
	 */
	public function prePersist()
	{
		$this->modified = new \DateTime();
	}

}
