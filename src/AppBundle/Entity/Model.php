<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Model
 *
 * @ORM\Table(name="automotive_model")
 * @ORM\HasLifecycleCallbacks()
 */
class Model
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
	 * @var Make
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Make")
	 * @ORM\JoinColumn(name="make_id", referencedColumnName="id")
	 */
	protected $make;

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
		$this->modified = new \DateTime();
	}
}
