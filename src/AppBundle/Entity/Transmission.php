<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Transmission
 *
 * @ORM\Table(name="automotive_transmission")
 * @ORM\HasLifecycleCallbacks()
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

	/**
	 * @var TransmissionClassification
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TransmissionClassification")
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
}
