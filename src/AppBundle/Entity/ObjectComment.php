<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ObjectComment
 *
 * @ORM\Table(name="automotive_object_comment")
 * @ORM\HasLifecycleCallbacks()
 */
class ObjectComment
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @var text
	 *
	 * @ORM\Column(type="text")
	 */
	protected $comment;


	/**
	 * @var Object
	 *
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Object")
	 * @ORM\JoinColumn(name="object_id", referencedColumnName="id")
	 */
	protected $object;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(type="datetime")
	 */
	protected $created;

	/**
	 * @ORM\PrePersist()
	 */
	public function prePersist()
	{
		if ($this->id === null) {
			$this->created = new \DateTime();
		}
	}
}
