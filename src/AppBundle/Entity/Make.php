<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Make
 *
 * @ORM\Table(name="automotive_make")
 * @ORM\HasLifecycleCallbacks()
 */
class Make
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
